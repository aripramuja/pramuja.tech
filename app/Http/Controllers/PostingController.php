<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function posting()
    {
        return view('administrator/posting');
    }
    public function postarticle()
    {
        return view('administrator/post-article');
    }
    public function postevent()
    {
        return view('administrator/post-event');
    }
}
