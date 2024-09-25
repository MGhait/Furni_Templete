<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function about() {
        return view('theme.about');
    }

    public function shop() {
        return view('theme.shop');
    }

    public function blog() {
        return view('theme.blog');
    }

    public function contact() {
        return view('theme.contact');
    }

    public function home() {
        return view('theme.home');
    }

    public function services() {
        return view('theme.services');
    }
    public function store(Request $request) {
        dd($request);
    }
}
