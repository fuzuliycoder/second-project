<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function detail(){
        return view('detail');
    }
    public function feature(){
        return view('feature');
    }
    public function course(){
        return view('course');
    }
}

