<?php

use Illuminate\Support\Facades\Route;

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
    return view('user.home');
});
Route::get('/almabanyAlsakania', function () {
    return view('user.almabanyAlsakania');
});
Route::get('/dafiAlmasrofat', function () {
    return view('user.dafiAlmasrofat');
});


Route::get('/ershadat', function () {
    return view('user.ershadat');
});
Route::get('/foroiUkhra', function () {
    return view('user.foroiUkhra');
});
Route::get('/gadwelAltaskin', function () {
    return view('user.gadwelAltaskin');
});
Route::get('/khatawatAlelthaq', function () {
    return view('user.khatawatAlelthaq');
});
Route::get('/mawaidAltaqdim', function () {
    return view('user.mawaidAltaqdim');
});

Route::get('/natigatAltansik', function () {
    return view('user.natigatAltansik');
});

Route::get('/shroutAltaqdim', function () {
    return view('user.shroutAltaqdim');
});



Route::get('/takdimTalapAlelthak','User\requestController@index');
Route::post('/takdimTalapAlelthak','User\requestController@store');
Route::get('/ekhterMakanek','User\roomController@index');
Route::post('/ekhterMakanek','User\roomController@store');
Route::post('/ekhterMakanek/fetch','User\roomController@fetch')->name('room.fetch');
Route::get('/nategatAlqupole','User\koupolController@index');
Route::post('/nategatAlqupole','User\koupolController@search');
Route::get('/eltmas','User\eltmasController@index');
Route::post('/eltmas','User\eltmasController@store');
Route::get('/shakawyAndMoktarahat','User\shakawyController@index');
Route::post('/shakawyAndMoktarahat','User\shakawyController@store');

Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'auth'] ,function(){
    Route::get('/dashboard','adminController@index');
    Route::get('/room','reservationController@index');
    Route::get('/iltmas','iltmas@index');
    Route::get('/shakawy','ektrah@index');
    Route::resource('/users', 'userController');
    Route::resource('/students', 'studentController');
    Route::get('/students/accept/{student}', 'studentController@accept');
    Route::get('/students/reject/{student}', 'studentController@reject');
    Route::resource('/rooms', 'RoomsController');
  
   
});
Auth::routes();
