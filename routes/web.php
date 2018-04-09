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
Route::any('mydb', array('as' => 'Taylor', 'uses' => 'mydb@dbview')) ;
Route::get('/', function () {

    $test='pavindu';
    return view('web',['test'=>$test]);
});

Route::get('testlogin', function () {
    return view('testlogin');
});

Route::get('testregister', function () {
    return view('testregister');
});

Route::post('testregister',['uses'=>'usercontroller@store']);

Route::post('testlogin', ['uses'=>'logincontroller@testlogin']);

Route::any('send','mailcontroller@send');

Route::get('test',function(){
	return view('test');
});




	

