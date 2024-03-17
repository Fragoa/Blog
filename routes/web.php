<?php

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

use App\Http\Controllers\Admin\AdminUserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['Middleware'=>'admin'], function(){

    Route::resource('admin/users', 'Admin\AdminUserController');
});


//Route::get   ('/admin/{id}/edit', 'Admin\AdminUserController@edit')->name('admin.user.edit');
//Route::put   ('/admin/{id}', 'Admin\AdminUserController@update')->name('admin.user.update');
//Route::get   ('/admin/{id}', 'Admin\AdminUserController@show')->name('admin.user.show');
//Route::get   ('/admin/create','Admin\AdminUserController@create')->name('admin.user.create');
//Route::post  ('/admin', 'Admin\AdminUserController@store')->name('admin.user.store');
//Route::get   ('/admin','Admin\AdminUserController@index')->name('admin.user.index');
//Route::delete('/admin/{id}' ,'Admin\AdminUserController@destroy')->name('admin.user.destroy');
//
//
