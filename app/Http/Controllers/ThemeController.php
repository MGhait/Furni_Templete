<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
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
    public function store(StoreContactRequest $request) {
        // Not Best Practice Way

        // $validateDate= $request->validate([
        //     'first_name' => 'required|string',
        //     'last_name' => 'required|string',
        //     'email' => 'required|email',
        //     'message' => 'required|min:5',
        // ],[
        //     'first_name.required' => 'First Name Field is Required MAN!!',
        //     'last_name.required' => 'Last Name Field is Required MAN!!',
        //     'email.required' => 'Email Field is Required MAN!!',
        //     'email.email' => 'Write A Valid Email Address Idiot !',
        //     'message.min' => 'COME ON This Is Too Short To Be A Message !',
        // ]);

        // Separate the validation in Request Class 
        $validateDate = $request->validated();
        


    }
}
