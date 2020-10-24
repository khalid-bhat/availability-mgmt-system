<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Apis; 
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/first-api',[Apis::class,'firstApi']); 

Route::get('/second-api/{id}',[Apis::class,'secondApi']); 

Route::post('/post-api',[Apis::class,'postApi']); 

Route::get('/taskList',[Apis::class,'getTaskList']); 

Route::get('/singleTask/{id}',[Apis::class,'getSingleTaskList']); 