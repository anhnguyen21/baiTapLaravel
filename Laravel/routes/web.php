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
    return view('welcome');
});

Route::get('anh',function(){
    return 'anh';
});

Route::get('boostrap', function () {
    return view('demoBoostrap');
});

Route::get('wellcome', 'wellcome@getWellcome');
Route::get('tinhtong/{a}/{b}','tongavab@tinhtong');

Route::get('wedUi', function () {
    return view('webUI');
});
Route::get('tinh', function () {
    return view('tinhtong');
});

Route::post('tinh','tongavab@postTinhTong');
Route::get('title','tongavab@index');

Route::get('dtTamgiac', function () {
    return view('dtTamGiac');
});

Route::post('dtTamgiac','dienTich@dienTichTamGiac');