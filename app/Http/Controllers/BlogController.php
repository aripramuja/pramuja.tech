<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function event()
    {
        return view('interface/event');
    }
    public function article()
    {
        return view('interface/article');
    }
}
