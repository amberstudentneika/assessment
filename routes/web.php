<?php

use Illuminate\Support\Facades\Route;

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
//Auth::routes();

Route::view('/login', 'livelogin')->name('liveLogin');
Route::view('/register', 'liveRegister')->name('liveRegister');
Route::view('/home/student', 'studentHome')->name('studentHome');
Route::view('/home/admin','adminHome')->name('adminHome');
Route::view('/home/teacher', 'TeacherHome')->name('TeacherHome');

