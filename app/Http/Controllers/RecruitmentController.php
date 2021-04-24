<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    public function recruitment()
    {
        return view('administrator/recruitment');
    }
}
