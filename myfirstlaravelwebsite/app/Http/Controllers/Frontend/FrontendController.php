<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        // return view('frontend.modules.index');
        return view('frontend.home');
    }

    public function about(){
        return view('frontend.about');
    }

    public function service(){
        return view('frontend.service');
    }

    public function portfolio(){
        return view('frontend.portfolio');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
