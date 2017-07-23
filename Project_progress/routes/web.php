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
//TODO


//添加项目页面
Route::get('/home/add','ProjectController@index')->middleware('auth');
//添加项目逻辑
Route::post('/home/add','ProjectController@add')->middleware('auth');
//项目列表
Route::get('/home/show','ProjectController@show')->middleware('auth');
//添加进度页面
//TODO
//添加进度逻辑
//TODO


//个人信息更改页面
Route::get('/home/user','UserController@index')->middleware('auth');
//更改逻辑
Route::post('/home/user','UserController@user')->middleware('auth');

