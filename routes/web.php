<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Students;  
use App\Http\Controllers\StudentProfile;    
use App\Http\Controllers\Relations; 
use App\Http\Controllers\Tasks; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/student', [Students::class,'index']); 
Route::get('/student-test', [Students::class,'test']);  

Route::get('/test', function () {
     echo "yes";
}); 

Route::get('/student-first', function () {
    return view('student');
}); 
Route::get('/student-second', [Students::class,'studentPage'] ); 

Route::view('information','info');   // name, viewname

 

  
Route::get('/mystudent/{id}',[Students::class,'mystudent'] ); 


Route::match(['get','post'],'/getform', function () {
    return  22;
}); 

//Route::get('/mytest/{id}',[Students::class,'mytestdata'] )->where('id','[0-9]+'); 

Route::get('/users/{name}',[Students::class,'userName'] )->where('name','[A-Za-z]+');


Route::middleware(['loginValue'])->group(function () {  
    Route::get('/user-info/{name}/{sid}',[Students::class,'userInfo'])
    ->where(['name'=>'[A-Za-z]+','sid'=>'[0-9]+']); 
    Route::get('/mytest/{id}',[Students::class,'mytestdata'] ); 
}); 

Route::get('lists',[Students::class,'getListData'] );
Route::get('api-list',[Students::class,'getApiListData'] );
Route::redirect('/testData','information');



Route::get('layout-second',[Students::class,'getSecondLayout'] );


Route::get('set-session',[Students::class,'createSession'] );
Route::get('show-session',[Students::class,'showSession'] );
Route::get('delete-session',[Students::class,'deleteSession'] );
 

Route::get('/localization/{lang}', function ($lang) {
    App::setlocale($lang); 
    return view('localization');
}); 

Route::get('query',[Students::class,'queryBuilder'] ); 

Route::get('model-bind/{val:email_id}',[Students::class,'modelBindData'] ); 
 
 
Route::resource('student-profile',StudentProfile::class);

/* Route::prefix('admin')->namespace('Admin')->group(static function(){

    Route::get('/test1', function () {
        echo "test1";
   }); 
   Route::get('/test2', function () {
        echo "test2";
    }); 
}); */

Route::group(['middleware'=>['web'],'prefix'=>'infos','namespace'=>'Infos'],function(){

    Route::get('/test1', function () {
        echo "test1";
   }); 
   Route::get('/test2', function () {
        echo "test2";
    }); 

Route::get('layout',[Students::class,'getFirstLayout'] );
});

Route::get('accessors',[Students::class,'getAccessors'] );

Route::get('mutator',[Students::class,'setMutator'] );

#### Relation ######

Route::get('one-to-one',[Relations::class,'oneToOne'] );
Route::get('inverse-one-to-one',[Relations::class,'inverseOneToOne'] );


Route::get('one-to-many',[Relations::class,'oneToMany'] );

Route::get('many-to-many-blog',[Relations::class,'manyToManyBlog'] );

Route::get('many-to-many-tag',[Relations::class,'manyToManyTag'] );

Route::get('one-to-many-through',[Relations::class,'oneToManyThrough'] );

Route::get('many-to-many-through',[Relations::class,'manyToManyThrough'] );


Route::get('one-to-one-ploy-blog',[Relations::class,'oneToOnePloyBlog'] );

Route::get('one-to-one-ploy-client',[Relations::class,'oneToOnePloyClient'] );

Route::get('one-to-one-ploy-image',[Relations::class,'oneToOnePloyImage'] );

Route::get('one-to-one-ploy-blogs',[Relations::class,'oneToOnePloyBlogs'] );

Route::get('one-to-one-ploy-clients',[Relations::class,'oneToOnePloyClients'] );


Route::get('many-to-many-ploy-blog',[Relations::class,'manyToManyPloyBlog'] ); 
Route::get('many-to-many-ploy-video',[Relations::class,'manyToManyPloyVideo'] );
Route::get('many-to-many-ploy-tag',[Relations::class,'manyToManyPloyTag'] );

 
### CRUD ####

Route::get('task',[Tasks::class,'index'] )->name("task"); 
  
Route::match(['get','post'],'/task/add', [Tasks::class,'addTask'] )->name('taskAdd'); 

Route::match(['get','post'],'/task/edit/{id}',[Tasks::class,'addTask'] )->name("editTask"); 
 
Route::get('/task/delete/{id}',[Tasks::class,'deleteTask'] )->name("deleteTask");

Route::get('task/restore/{id}',[Tasks::class,'restoreTask'] ); 