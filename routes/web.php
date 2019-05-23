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

Route::get( '/user/show', 'UserController@show' );

Route::post( '/blog/add', 'BlogController@add' );

Route::get( '/blog/add', function (){
	return view( 'addblog' );
});

Route::get( '/blogslist', function() {
	return view('blogslist', ['data' => App\Blog::get() ] );
});

Route::get( '/blog/post/{id}', function($id){
	$data = App\Blog::where('id', $id)->get();
	return view( 'blogcontent', ['data'=>$data] );
});

Route::get( '/blog/edit/{id}', function($id) {
	$data = App\Blog::where( 'id', $id )->get()->toArray();
	return view ('editblog', ['data'=>$data[0]] );
});

Route::post( '/blog/edit/{id}', 'BlogController@edit');

//Route::get('/welcome', function() {
//   return 'Welcome to you';
//});
//
//Route::get('/test/{name}', function($name) {
//	return view( 'test', [ 'name' => $name ] );
//});

//Route::view( '/test', 'test', [ 'name' => 'Roozbeh'] );
