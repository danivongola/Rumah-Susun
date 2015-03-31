<?php
//
///*
//|--------------------------------------------------------------------------
//| Application Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register all of the routes for an application.
//| It's a breeze. Simply tell Laravel the URIs it should respond to
//| and give it the Closure to execute when that URI is requested.
//|
//*/


Route::get('kirim', function()
{
Mail::send('emails.auth.activation', array('key' => 'value'), function($message)
{
    $message->to('yokainurarikuo@gmail.com', 'User ')->subject('Activation');
});
});
Route::group(array('before'=> 'sentry_auth'), function()
{
Route::controller('home', 'HomeController');

});
// admin routes
//Route::group(array('prefix' => 'admin'), function()
//{
//    Route::resource('admin/penjadwalan','UserpenjadwalanController');
//    Route::resource('userair', 'UserairController');
//});
Route::group(array('prefix'=>'/user/{id}'), function()
{
    Route::get('/create', 'CalonpenghuniController@create');
    Route::post('/create', 'CalonpenghuniController@store');
});

Route::group(array('prefix'=>'/calonpenghuni/{id}'), function()
{
    Route::put('/update', 'CalonpenghuniController@update');

});


/*Route::get('biaya/{id}', 'BiayaController@show');*/
Route::get('formulir/{id}/create' ,'RegistrasiController@create');
Route::post('formulir/{id}' ,'RegistrasiController@store');
Route::get('daftartunggu/{id}', 'DaftartungguController');
Route::resource('calonpenghuni','CalonpenghuniController', ["except"=>["create","store"]]);
Route::resource('daftartunggu','DaftartungguController');
Route::resource('penghuni', 'PenghuniController');
Route::resource('perpanjangan', 'PerpanjanganController');
Route::resource('kamarkosong', 'KamarkosongController');



Route::resource('keluhan', 'KeluhanController');
Route::resource('cpls', 'CplsController');


Route::resource('penjadwalan','PenjadwalanController');


Route::resource('kamar','KamarController');
Route::resource('biaya','BiayaController');
Route::resource('daftartunggu','DaftartungguController');
//Route::resource('calonpenghuni','CalonpenghuniController');


Route::controller('auths', 'AuthsController');

Route::controller('', 'IndexController');







//Route::get('dashboard', 'HomeController@dashboard');
//Route::get('login', array('guest.login', 'uses'=>'GuestController@login'));
//Route::post('authenticate', 'HomeController@authenticate');
//Route::get('logout', 'HomeController@logout');

?>
