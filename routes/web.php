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

//User
//Stories(Hiển thị,thêm,sửa,xóa truyện)
//get view
Route::get('/account',[\App\Http\Controllers\StoriesController::class,'Account']);
Route::get('/viet-thu-moi',[\App\Http\Controllers\StoriesController::class,'newLetter']);
Route::get('/hop-thu-den',[\App\Http\Controllers\StoriesController::class,'takeLetter']);
Route::get('/hop-thu-di',[\App\Http\Controllers\StoriesController::class,'sendLetter']);
Route::get('/quan-ly-truyen',[\App\Http\Controllers\StoriesController::class,'listStory']);
Route::get('/dang-truyen',[\App\Http\Controllers\StoriesController::class,'postStory']);
Route::get('/danh-sach-tac-gia',[\App\Http\Controllers\StoriesController::class,'listAuthor']);
Route::get('/nap-xu',[\App\Http\Controllers\StoriesController::class,'loadCent']);
Route::get('/lich-su-nap',[\App\Http\Controllers\StoriesController::class,'loadHistory']);
Route::get('/shop-vat-pham',[\App\Http\Controllers\StoriesController::class,'itemShop']);


//Route::get('/',[\App\Http\Controllers\StoriesController::class,'getStory']);
//Route::post('/',[\App\Http\Controllers\StoriesController::class,'addStory']);
//Route::put('/',[\App\Http\Controllers\StoriesController::class,'updateStory']);
//Route::delete('/',[\App\Http\Controllers\StoriesController::class,'deleteStory']);
////Chapter
//Route::get('/',[\App\Http\Controllers\ChaptersController::class,'getListChapter']);
//Route::post('/',[\App\Http\Controllers\ChaptersController::class,'addChapter']);
//Route::put('/',[\App\Http\Controllers\ChaptersController::class,'updateChapter']);
//Route::delete('/',[\App\Http\Controllers\ChaptersController::class,'deleteChapter']);


