<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('index');
    }

    public function about() {
        return view('about');
    }
    //
}
