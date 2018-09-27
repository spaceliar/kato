<?php

Route::get('/', function () {
    return redirect('gioithieu');
});

Route::get('/admin/{demopage?}', 'DemoController@demo')->name('demo')->middleware('checkauth');
Route::get('dangnhap',['as'=>'getlogin','uses'=>'Auth\LoginController@getLogin']);
Route::post('dangnhap',['as'=>'postlogin','uses'=>'Auth\LoginController@postLogin']);
Route::get('logout',['as'=> 'getLogout','uses'=>'Auth\LoginController@getLogout']);
Route::group(['prefix'=>'quantri','middleware'=> 'checkauth'],function(){
	Route::get('info',['as'=>'getInfo','uses'=>'AboutController@getInfo']);
	Route::post('info',['as'=>'postInfo','uses'=>'AboutController@postInfo']);
	Route::get('info2',['as'=>'getInfo2','uses'=>'AboutController@getInfo2']);
	Route::get('list-product',['as'=>'getListProduct','uses'=>'ProductController@getListProduct']);
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('gioithieu',['as'=>'getGioiThieu','uses'=>'AboutController@getGioiThieu']);
Route::group(['prefix'=>'sanpham'], function(){
	Route::get('/{url}',['as'=> 'getSanPham','uses'=>'ProductController@getSanPham']);
});

