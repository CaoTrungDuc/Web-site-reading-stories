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
Route::get('/doc-truyen', function () {return view('doctruyen');});


//API User
Route::get('/listUser',[\App\Http\Controllers\UsersController::class,'getListUser']);
Route::post('/checkLogin',[\App\Http\Controllers\UsersController::class,'checkLogin']);
Route::post('/register1',[\App\Http\Controllers\UsersController::class,'register']);

//API Story
Route::get('/quan-ly-truyen',[\App\Http\Controllers\StoriesController::class,'getListStory']);
Route::post('/postStory',[\App\Http\Controllers\StoriesController::class,'postStory']);
Route::put('/updateStory/{id}',[\App\Http\Controllers\StoriesController::class,'updateStory']);
Route::delete('/deleteStory/{id}',[\App\Http\Controllers\StoriesController::class,'deleteStory']);
//API Chapter
Route::get('/quan-ly-truyen',[\App\Http\Controllers\ChaptersController::class,'getListChapter']);
Route::post('/postChapter',[\App\Http\Controllers\ChaptersController::class,'postChapter']);
Route::put('/updateChapter/{id}',[\App\Http\Controllers\ChaptersController::class,'updateChapter']);
Route::delete('/deleteChapter/{id}',[\App\Http\Controllers\ChaptersController::class,'deleteChapter']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
