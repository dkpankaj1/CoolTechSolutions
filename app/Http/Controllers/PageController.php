<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('website.pages.index');
    }
    public function about(){
        return view('website.pages.about');
    }
    public function contact(){
        return view('website.pages.contact');
    }
    public function services(){
        return view('website.pages.service');
    }
    
}
