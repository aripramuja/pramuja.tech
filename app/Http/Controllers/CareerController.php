<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function career()
    {
        return view('interface/career');
    }
}
