<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function index()
    {
        $innerTitle = "Contact";
        return view('contact', compact('innerTitle'));
    }
}
