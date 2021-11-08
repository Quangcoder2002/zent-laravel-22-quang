<?php

use App\Models\Role;
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

Route::prefix('admin')->name('admin.')->namespace('Admin')->middleware(['auth','role:admin,admod,writer'])->group(function(){
    Route::prefix('dashboard')->name('dashboard.')->group(function(){
        Route::get('','DashboardController@index')->name('index');
    });
    Route::resource('permission', PermissionController::class)->parameters(['permission' => 'id']);
    Route::resource('users', UserController::class)->parameters(['users' => 'id']);
    Route::resource('category', CategoryController::class)->parameters(['category' => 'id']);
    Route::resource('post', PostController::class)->parameters(['post' => 'id']);
    Route::resource('tag', TagController::class)->parameter('tag','id');
    Route::resource('role', RoleController::class)->parameters(['role' => 'id']);
    Route::post('/login/user/{id}', 'UserController@loginWithUser')->name('users.login');
    Route::resource('storage', StorageController::class)->parameters(['storage' => 'id']);
    Route::resource('menu', MenuController::class)->parameters(['menu' => 'id']);
    Route::get('storage/download','StorageController@download')->name('storage.download');
});

Route::prefix('')->name('client.')->namespace('Client')->group(function(){
    Route::get('','HomeController@index')->name('index');
    Route::resource('blog', BlogController::class)->parameters(['blog' => 'id'])->whereNumber('id');
    Route::get('cart/{id}', function($id){
        return view('client.cart');
    });
    Route::get('blog/category','BlogController@category')->name('blog.category');
    // // Route::view('/','client.home')
    // // Route::prefix('blog')->name('blog.')->group(function(){
    // //     Route::view('','client.blog')->name('index');
    // //     Route::get('/{id}', function($id){
    // //         return view('client.blog-single-post');
    // //     })->name('show');
    // // });
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
