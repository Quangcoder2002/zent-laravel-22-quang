<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
Route::view('/','welcome');
Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){
    Route::prefix('dashboard')->name('dashboard.')->group(function(){
        Route::get('','DashboardController@index')->name('index');
    });
    Route::resource('users', UserController::class)->parameters(['users'=>'id']);
    Route::resource('category', CategoryController::class)->parameters(['category'=>'id']);
    Route::resource('post', PostController::class)->parameters(['post'=>'id']);
});