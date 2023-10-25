<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() 
    {
        return view('contact');
    }
    
    public function confirm(Request $request)
    {
        $contact = $request->only(['name-first','name-last','gender','mail','post','address','building','opinion']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['name-first','name-last','gender','mail','post','address','building','opinion']);
        Contact::create($contact);
        return view('thanks');
    }
}
