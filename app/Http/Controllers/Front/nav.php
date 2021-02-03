<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class nav extends Controller
{


    public function appointment()
    {
        return view('Front\appointment');
    }
  
    public function gallery()
    {
        return view('Front\gallery');
    }
    public function faq()
    {
        return view('Front\faq');
    }

    public function index()
    {
        return view('Front\index');
    }

}
