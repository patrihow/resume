<?php

namespace App\Http\Controllers;
use app\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
    return view('home'); 
    }

    public function about()
    {
    return view('about'); 
    }

    public function resume()
    {
    return view('resume'); 
    }

    public function projets()
    {
    return view('projets'); 
    }

    public function contact()
    {
    return view('contact'); 
    }
}
