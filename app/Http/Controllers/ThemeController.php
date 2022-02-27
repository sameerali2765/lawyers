<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
     public function About()
    {
        return view('about');
    }
    
    public function Contact()
    {
        return view('contact');
    }
    public function News()
    {
        return view('news');
    }
    public function Case()
    {
        return view('cases');
    }
}
