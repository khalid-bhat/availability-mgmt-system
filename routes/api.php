<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AvailableTimeSlotController;

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

//// login and register //////
Route::post('/register',[AuthenticationController::class,'register']);

Route::get('/login',[AuthenticationController::class,'login'])->name('login');

// Doctor APIs
Route::middleware(['auth:api','user-role:doctor'])->group(function()
{
    Route::post('/save-availability', [AvailableTimeSlotController::class,'store']);
    Route::post('/update-availability', [AvailableTimeSlotController::class,'update']);

});

Route::get('/check-availability', [AvailableTimeSlotController::class,'getAvailabilityForPatient']);

// Patient APIs
Route::middleware(['auth:api','user-role:patient'])->group(function()
{
});

