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

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('admin')->name('admin.')->group(function(){
    Route::prefix('dashboard')->name('dashboard.')->group(function(){
        Route::view('','dashboard')->name('index');
    });
    Route::prefix('users')->name('users.')->group(function(){
        Route::view('show/{id}','user/detail')->where('id','[0-9]+')->name('show');

        Route::view('','user/list')->name('index');   
     
        Route::view('create','user/create')->name('create');
        Route::post('store', function(){
            return redirect()->route('admin.users.index');
        })->name('store');
        
        Route::view('edit/{id}','user/edit')->where('id','[0-9]+')->name('edit');
        Route::put('update/{id}', function(){
            return redirect()->route('admin.users.index');
        })->name('update')->where('id','[0-9]+');
        
        Route::get('delete/{id}', function($id){
            return redirect()->route('admin.users.index');
        })->name('delete')->where('id','[0-9]+');
    });
    Route::prefix('category')->name('category.')->group(function(){
        Route::view('show/{id}','category/detail')->where('id','[0-9]+')->name('show');

        Route::view('','category/list')->name('index');   
     
        Route::view('create','category/create')->name('create');
        Route::post('store', function(){
            return redirect()->route('admin.category.index');
        })->name('store');
        
        Route::view('edit/{id}','category/edit')->where('id','[0-9]+')->name('edit');
        Route::put('update/{id}', function(){
            return redirect()->route('admin.category.index');
        })->name('update')->where('id','[0-9]+');
        
        Route::get('delete/{id}', function($id){
            return redirect()->route('admin.category.index');
        })->name('delete')->where('id','[0-9]+');
    });
    Route::prefix('post')->name('post.')->group(function(){
        Route::view('show/{id}','post/detail')->where('id','[0-9]+')->name('show');

        Route::view('','post/list')->name('index');   
     
        Route::view('create','post/create')->name('create');
        Route::post('store', function(){
            return redirect()->route('admin.post.index');
        })->name('store');
        
        Route::view('edit/{id}','post/edit')->where('id','[0-9]+')->name('edit');
        Route::put('update/{id}', function($id){
            return redirect()->route('admin.post.index');
        })->name('update')->where('id','[0-9]+');
        
        Route::get('delete/{id}', function($id){
            return redirect()->route('admin.post.index');
        })->name('delete')->where('id','[0-9]+');
    });
});