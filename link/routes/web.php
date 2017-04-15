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
Route::get('/add',function(){
   return view('add');
});
Route::post('/add','LinkController@add');

Route::get('/delete',function(){
    return view('delete');
});

Route::post('/delete','LinkController@delete');

Route::get('/push',function (){             //向表单最后添加一个元素
    return view ('push');
});

Route::post('/push','LinkController@push');

Route::get('/pop', 'LinkController@pop');              //展示最后一个元素

Route::get('/size','LinkController@size');

Route::get('/print_list','LinkController@print_list');

Route::get('/construct', function () {
    return view('construct');
});

Route::post('/construct','LinkController@construct');