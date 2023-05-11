<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pagehome() {
        return view('homepage');
    }

    public function pageabout() {
        return view('aboutpage');
    }

    public function pagecontact() {
        return view('contactpage');
    }
}
