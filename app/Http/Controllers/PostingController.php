<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function posting()
    {
        return view('administrator/posting');
    }
}
