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

Route::get('/','App\Http\Controllers\IndexController@index')->name('home');
Auth::routes();

Route::get('/login','App\Http\Controllers\LoginController@login' )->name('liveLogin');

Route::middleware(['Auth'])->group(function(){

//homepage
Route::get('/home/admin','App\Http\Controllers\IndexController@adminHome')->name('adminHome');
Route::get('/home/teacher','App\Http\Controllers\IndexController@teacherHome')->name('teacherHome');
Route::get('/home/student','App\Http\Controllers\IndexController@studentHome')->name('studentHome');

//Course Routes
Route::get('/course','App\Http\Controllers\CourseController@course')->name('course');
Route::get('/student','App\Http\Controllers\StudentController@student')->name('student');
Route::get('/teacher','App\Http\Controllers\TeacherController@teacher')->name('teacher');
Route::get('/schedule','App\Http\Controllers\ScheduleController@schedule')->name('schedule');
Route::get('/assignment','App\Http\Controllers\AssignmentController@assignment')->name('assignment');
Route::get('/student/schedule','App\Http\Controllers\AssignmentController@studentSchedule')->name('studentSchedule');
Route::get('/teacher/schedule','App\Http\Controllers\AssignmentController@teacherSchedule')->name('teacherSchedule');
});

