<?php

namespace App\Http\Controllers;

use App\Models\Stories;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    public function getAccount(){return view('account');}
    public function newLetter(){return view('vietthumoi');}
    public function takeLetter(){return view('hopthuden');}
    public function sendLetter(){return view('hopthudi');}
    public function listStory(){return view('quanlytruyen');}
    public function postStory(){return view('dangtruyen');}
    public function listAuthor(){return view('danhsachtacgia');}
    public function loadCent(){return view('napxu');}
    public function loadHistory(){return view('lichsunap');}
    public function itemShop(){return view('shopvatpham');}
}
