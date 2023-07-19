<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    public function save(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required | string',
            'email' => 'required | email',
            'body' => 'required | string',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'body' => $request->body,
        ]);

        return back()->with('message', 'your message was received. We will get back to you shortly');
    }
}
