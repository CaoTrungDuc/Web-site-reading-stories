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
//get view

//view aucount
Route::get('/', function () {return view('home');});
Route::get('/account', function () {return view('account');});
Route::get('/viet-thu-moi', function () {return view('vietthumoi');});
Route::get('/hop-thu-den', function () {return view('hopthuden');});
Route::get('/hop-thu-di', function () {return view('hopthudi');});
Route::get('/quan-ly-truyen', function () {return view('quanlytruyen');});
Route::get('/dang-truyen', function () {return view('dangtruyen');});
Route::get('/danh-sach-tac-gia', function () {return view('danhsachtacgia');});
Route::get('/nap-xu', function () {return view('napxu');});
Route::get('/lich-su-nap', function () {return view('lichsunap');});
Route::get('/shop-vat-pham', function () {return view('shopvatpham');});

