<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recruitment_registration extends Model
{
    use HasFactory;
    public function registratedData()
    {
        return DB::table('recruitment_registrations')->get();
    }
}
