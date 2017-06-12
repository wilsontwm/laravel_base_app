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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('register/verify/{activation_code}', 'Auth\RegisterController@verify');

Route::group(['namespace' => 'Dashboard', 'prefix' => '/'], function(){
    // Authenticated route
    Route::group(['middleware' => 'auth'], function() {

        Route::get('home', 'HomeController@index')->name('home');

        // User routes
        Route::get('users', ['as' => 'user.list', 'uses' => 'UserController@index']);
        Route::get('users/password', ['as' => 'user.password.edit', 'uses' => 'UserController@editPassword']);
        Route::patch('users/password', ['as' => 'user.password.update', 'uses' => 'UserController@updatePassword']);
        Route::get('users/picture', ['as' => 'user.picture.edit', 'uses' => 'UserController@editPicture']);
        Route::post('users/picture', ['as' => 'user.picture.create', 'uses' => 'UserController@createPicture']);
        Route::delete('users/picture', ['as' => 'user.picture.delete', 'uses' => 'UserController@deletePicture']);

        Route::get('users/profile', ['as' => 'user.profile', 'uses' => 'UserController@profile']);
        Route::get('users/profile/edit', ['as' => 'user.profile.edit', 'uses' => 'UserController@edit']);
        Route::patch('users/profile/update', ['as' => 'user.profile.update', 'uses' => 'UserController@update']);

        Route::get('users/{user}/profile', ['as' => 'user.profile.show', 'uses' => 'UserController@show']);
        Route::patch('user/{user}/system', ['as' => 'user.system.update', 'uses' => 'UserController@updateSystem']);

    });

});

