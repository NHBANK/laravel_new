<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home(){
        return view('welcome', [
            'foo' => 'bar'
        ]);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}

