<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $id;

    public function index()
    {
        return view('admin.dashboard', [
            'doctorRequest' => Doctor::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function show($id)
    {
        $item = Doctor::where('id', $id)->get();
        foreach ($item as $val) {
            $this->id = $val->id;
        }

        $user = User::where('id', $this->id)->get();

        return view('admin.show', [
            'item' => $item,
            'user' => $user
        ]);
    }

    public function imgDownload($img)
    {
        $file = asset('images/' . $img);
        return response()->download($file);
    }
}
