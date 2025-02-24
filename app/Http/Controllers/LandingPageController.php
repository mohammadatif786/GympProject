<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about-us');
    }

    public function classes()
    {
        return view('class-details');
    }
    
    public function services()
    {
        return view('services');
    }

    public function team()
    {
        return view('team');
    }

    public function classTimetable()
    {
        return view('class-timetable');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function blog()
    {
        return view('blog');
    }
    public function blogDetails()
    {
        return view('blog-details');
    }
}
