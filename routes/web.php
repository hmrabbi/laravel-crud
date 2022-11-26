<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/student',[StudentController::class,"student"]);

Route::post('/std',[StudentController::class,"addstd"]);

Route::get('/display',[StudentController::class,"displaystd"]);

Route::get('/delete/{id}',[StudentController::class,"stddelete"]);

Route::get('/update/{id}',[StudentController::class,"stdupdate"]);

Route::post('/stdupdate/{id}',[StudentController::class,"update"]);
