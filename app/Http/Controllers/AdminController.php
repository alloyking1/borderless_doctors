<?php

namespace App\Http\Controllers;

use App\Models\Doctor;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'doctorRequest' => Doctor::paginate(10)
        ]);
    }

    public function show($id)
    {
        return view('admin.show', [
            'item' => Doctor::where('id', $id)->get()
        ]);
    }
}
