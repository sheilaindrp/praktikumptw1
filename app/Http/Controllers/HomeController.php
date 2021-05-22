<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home_0310');
    }

    public function article() {
        return view('article_0310');
    }

    public function contact() {
        return view('contact_0310');
    }
}
