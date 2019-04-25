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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::view( '/home', 'home' );

Route::view( '/aboutus', 'aboutus' );

Route::view( '/contact', 'contact');

Route::redirect('/', '/home' );

//Route::get('/welcome', function() {
//   return 'Welcome to you';
//});
//
//Route::get('/test/{name}', function($name) {
//	return view( 'test', [ 'name' => $name ] );
//});

//Route::view( '/test', 'test', [ 'name' => 'Roozbeh'] );
