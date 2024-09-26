<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Category;
use App\Models\Contact;

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
        $categories = Category::all();
        return view('theme.contact',compact('categories'));
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
        $validatedData = $request->validated();

        //Create Record -Ramy's Way-
        // $contact = new Contact();
        // $contact->first_name = 'mohamed';
        // $contact->last_name = 'saad';
        // $contact->email = 'mohamed@yahoo.com';
        // $contact->message = 'demo message';
        // $contact->save();
        
        //Using Mass Assignment (FILLABLE)
        Contact::create($validatedData);
        // dd('success');
        
        //redirect to same page
        return back()->with('success', 'Your Message Has Been Sent Successfully!');

    }
}
