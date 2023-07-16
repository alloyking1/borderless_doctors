<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function requestDoctor()
    {
        return view('dashboard.becomeDoctor');
    }

    public function becomeDoctor()
    {
        return view('dashboard.requestDoctor');
    }
}
