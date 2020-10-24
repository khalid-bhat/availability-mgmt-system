<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class Apis extends Controller
{
    //

    public function index(){
        return "index function";
    }


    public function firstApi(Request $request){

        $responseArray = [
            'status'=>'ok',
            'data'=>'22',
            'params1'=>$request->get('name'),
            'params2'=>$request->get('type')
        ]; 
        return response()->json($responseArray,200);
    }

    public function secondApi($id){
        $responseArray = [
            'status'=>'ok',
            'data'=>$id
        ]; 
        return response()->json($responseArray,200);
    }

    public function postApi(Request $request){
       // echo "<pre>"; print_r($request->file('image'));
        $responseArray = [
            'status'=>'ok',
            'data'=>'s',
            'name'=>$request->post('name'),
            'lastname'=>$request->post('lastname') 

        ]; 
        return response()->json($responseArray,200);
    }
    
    public function getTaskList(){
        $data =  Task::all();
        $responseArray = [
            'status'=>'ok',
            'data'=>$data
        ]; 
        return response()->json($responseArray,200);
    }

    public function getSingleTaskList($id){
        $data =  Task::find($id);
        if($data ==null){
            $data = 'Data Not Found';
        }
        $responseArray = [
            'status'=>'ok',
            'data'=>$data
        ]; 
        return response()->json($responseArray,200);
    }
    
    
}
