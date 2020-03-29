<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::middleware('role')->prefix('admin')->group(function () {
    Route::resource('teachers', 'TeacherController');
    Route::resource('modules', 'ModuleController');
    Route::resource('tests', 'TestController');
});

Route::middleware('role')->prefix('deadline')->group(function () {
    Route::get('/index', 'DeadlineController@index');
    Route::post('/save', 'DeadlineController@save');
    Route::get('/show', 'DeadlineController@show');
    Route::get('/edit', 'DeadlineController@edit');
});



