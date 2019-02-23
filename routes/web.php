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

Route::get('/login','MyAuth@ShowLogin');
Route::post('/Authlink','MyAuth@SentAuthLink');
Route::get('/Verify/{name}/{token}','MyAuth@VerifyLink');
Route::post('/loginVerify','MyAuth@VerifyLogin');

// facebook 
Route::get('login/{site}', 'MyAuth@redirectToProvider');
Route::get('login/{site}/callback', 'MyAuth@handleProviderCallback');



//user
Route::get('/User-Dashbord', function () {
    return "hello user";
});
//Admin
Route::get('/Admin-Dashbord', function () {
    return "hello Admin";
});


