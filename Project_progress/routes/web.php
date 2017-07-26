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

//登录注册路由
Auth::routes();
//登录后返回个人中心页面
Route::get('/home', 'HomeController@index')->name('home');

//主页页面
Route::get('/','IndexController@index');

//展示页页面
Route::get('/project/{posts}','ProjectController@project');


//添加项目页面
Route::get('/home/add','ProjectController@index')->middleware('auth');
//添加项目逻辑
Route::post('/home/add','ProjectController@add')->middleware('auth');
//项目列表页面
Route::get('/home/show','ProjectController@show')->middleware('auth');
//项目编辑页面
Route::get('/home/edit/{project}','ProjectController@edit')->middleware('auth');
//项目添加逻辑
Route::post('/home/edit/{project}','ProjectController@update')->middleware('auth');

//添加进度页面
Route::get('/home/project/add','ProgressController@index')->middleware('auth');
//添加进度逻辑
Route::post('/home/project/add','ProgressController@add')->middleware('auth');
//编辑进度页面
Route::get('/home/project/{progress}/edit','ProgressController@edit')->middleware('auth');
//编辑进度逻辑
Route::post('/home/project/{progress}/edit','ProgressController@update')->middleware('auth');
//进度表
Route::get('/home/project/show','ProgressController@show')->middleware('auth');

//个人信息更改页面
Route::get('/home/user','UserController@index')->middleware('auth');
//更改逻辑
Route::post('/home/user','UserController@user')->middleware('auth');
