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

Route::get('/eltmas', function () {
    return view('user.eltmas');
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
Route::get('/nategatAlqupole', function () {
    return view('user.nategatAlqupole');
});
Route::get('/natigatAltansik', function () {
    return view('user.natigatAltansik');
});
Route::get('/shakawyAndMoktarahat', function () {
    return view('user.shakawyAndMoktarahat');
});
Route::get('/shroutAltaqdim', function () {
    return view('user.shroutAltaqdim');
});

Route::get('/tasgilDkholAltalep', function () {
    return view('user.tasgilDkholAltalep');
});

Route::get('/takdimTalapAlelthak','User\requestController@index');
Route::post('/takdimTalapAlelthak','User\requestController@store');
Route::get('/ekhterMakanek','User\roomController@index');
Route::post('/ekhterMakanek','User\roomController@store');


Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'auth'] ,function(){
    Route::get('/dashboard','adminController@index');
    Route::get('/room','reservationController@index');
    Route::resource('/users', 'userController');
    Route::resource('/students', 'studentController');
    Route::get('/students/accept/{student}', 'studentController@accept');
    Route::get('/students/reject/{student}', 'studentController@reject');
    Route::resource('/building', 'buildingController');
    Route::resource('/rooms', 'roomNumberController');
  
   
});
Auth::routes();
