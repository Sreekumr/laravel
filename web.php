<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[UserController::class,'home']);
Route::get('/register',[UserController::class,'regist']);
Route::get('/login',[UserController::class,'Login']);
Route::post('/validate',[RegisterController::class,'reg']);
Route::post('/login',[RegisterController::class,'log']);