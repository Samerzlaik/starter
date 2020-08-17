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

Route::get('/admin', function () {
    return 'Hello admin';
});

// Route name
Route::namespace('Front')->group(function (){
    route::get('users', 'UserController@showAdminName');
});
