<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //                    {{ config('app.name', 'Laravel') }}

    public function about(){
        return view('abouts.about');
    }
}
