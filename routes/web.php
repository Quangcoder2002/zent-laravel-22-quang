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

Route::prefix('admin')->name('admin.')->namespace('Admin')->middleware('auth')->group(function(){
    Route::prefix('dashboard')->name('dashboard.')->group(function(){
        Route::get('','DashboardController@index')->name('index');
    });
    Route::resource('users', UserController::class)->parameters(['users'=>'id']);
    Route::resource('category', CategoryController::class)->parameters(['category'=>'id']);
    Route::resource('post', PostController::class)->parameters(['post'=>'id']);
    Route::resource('tag', TagController::class)->parameter('tag','id');
    Route::post('/login/user/{id}', 'UserController@loginWithUser')
    ->name('users.login');
});
Route::prefix('')->name('client.')->group(function(){
    Route::view('/','client.home')->name('index');
    Route::prefix('blog')->name('blog.')->group(function(){
        Route::view('','client.blog')->name('index');
        Route::get('/{id}', function($id){
            return view('client.blog-single-post');
        })->name('show');
    });
    Route::prefix('category')->name('category.')->group(function(){
        Route::view('','client.categories-post')->name('index');
    });
   
});
Route::prefix('admin')->namespace('Auth')->name('auth.')->group(function(){
    Route::get('/register', 'RegisteredUserController@create')->middleware('guest')->name('register');
    Route::post('/register', 'RegisteredUserController@store')->middleware('guest');
    Route::get('/login', 'LoginController@create')->middleware('guest')->name('login');
    Route::post('/login', 'LoginController@authenticate')->middleware('guest')->name('login');
    Route::post('/logout', 'LoginController@logout')->name('logout');
});
//Route::view('/','welcome');
