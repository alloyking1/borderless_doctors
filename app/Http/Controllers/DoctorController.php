<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function requestDoctor()
    {
        return view('dashboard.requestDoctor');
    }

    public function becomeDoctor()
    {
        return view('dashboard.becomeDoctor');
    }

    public function doctorApplication(Request $request)
    {
        $validate = $request->validate([
            'phone' => 'required',
            'ssn' => 'required | string',
            'address' => 'required | string',
            'requestDetails' => 'required',
            'passport' => 'required|file|mimes:jpg,jpeg,png,doc,docx,csv,pdf'
        ]);

        $filePathToStore = $this->fileUpload($request);
        Doctor::create([
            'phone' => $request->phone,
            'ssn' => $request->ssn,
            'address' => $request->address,
            'requestDetails' => $request->requestDetails,
            'users_id' => Auth::id(),
            'passport' => $filePathToStore,

        ]);

        return redirect()->route('dashboard.request-a-doctor-step-two');

        // return back()->with('success', 'Request submitted, we will get back to you shortly');
    }

    public function doctorApplicationStepTwo()
    {
        return view('dashboard.face-verify');
    }

    public function fileUpload(Request $request)
    {
        $imageName = time() . '.' . $request->file('passport')->extension();
        $path = $request->file('passport')->move(public_path('images'), $imageName);
        return $imageName;
    }
}
