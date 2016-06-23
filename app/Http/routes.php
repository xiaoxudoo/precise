<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/home', function () {
    return view('welcome');
});

Route::auth();
// 首页
Route::get('/', 'IndexController@index');
// Product 页面
Route::group(['middleware' => ['web'], 'namespace' => 'Product'], function(){
	Route::get('/virtualscreen', 'VirtulScreenController@index');
	Route::get('/moldynamic', 'MolDynamicController@index');
	Route::get('/moldock', 'MolDockController@index');
	Route::get('/pharm', 'PharmController@index');
	Route::get('/model', 'PharmController@index');
	Route::get('/valid', 'ValidController@index');
	Route::get('/paper', 'PaperController@index');
});
// Custom 第二列页面
Route::group(['middleware' => ['web'], 'namespace' => 'Custom'], function(){
	Route::get('/customer', 'CustomerController@index');
	Route::get('/case', 'CaseController@index');
});

// download 第三列页面
Route::group(['middleware' => ['web'], 'namespace' => 'Download'], function(){
	Route::get('/training', 'TrainingController@index');
});
Route::group(['middleware' => ['web','auth'], 'namespace' => 'Download'], function(){
	Route::get('/material', 'MaterialController@index');
});

// about 第四列页面
Route::group(['middleware' => ['web'], 'namespace' => 'About'], function(){
	Route::get('/company', 'CompanyController@index');
	Route::get('/contact', 'ContactController@index');
	Route::get('/culture', 'CultureController@index');
	Route::get('/join', 'JoinController@index');
	Route::get('/partner', 'PartnerController@index');
});

