<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix' => 'articles'], function() {

    });

    Route::resource('/articles', 'PostController');
    Route::resource('comments', 'CommentsController');

    Route::group(['prefix' => 'bap'], function() {

    });

    Route::group(['prefix' => 'admin'], function() {

    });
    Route::get('/bap', function () {
        return view('bap.index');
    })->middleware('web');

    Route::get('/admin', function () {
        return view('admin.bap');
    })->middleware('web');

    Route::resource('/bap', 'BapController');

    Route::resource('/admin', 'AdminController');
});
Route::get('/profil', function () {

})->middleware('web');
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index');
});
Route::resource('/users', 'UserController');
Route::resource('/contacts', 'ContactController');