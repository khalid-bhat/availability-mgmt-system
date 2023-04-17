<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use App\Models\User;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Support\Facades\Redis;
use Validator;

class AuthenticationController extends Controller
{




    ////// PASSPORT LOGIN & REGISTER /////////////

    public function register(Request $request){

        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'role'=> 'required|numeric|in:0,1',
            'password'=>'required',
            'c_password'=>'required|same:password'
        ],
        [
            'role.in' => 'The Role must be either 0 for Patient or 1 for Doctor'
        ]
    );

        if($validator->fails()){
            return response()->json($validator->errors(),202);
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');

        $user->save();

        $responseArray = [];
        $responseArray['token'] = $user->createToken('MyApp')->accessToken;
        $responseArray['name'] = $user->name;

        return response()->json($responseArray,200);
    }

    /// login //////

    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $user = Auth::user();
            $responseArray = [];
            $responseArray['token'] = $user->createToken('MyApp')->accessToken;
            $responseArray['name'] = $user->name;

            return response()->json($responseArray,200);

        }else{
            return response()->json(['error'=>'Unauthenticated'],203);
        }
    }


}
