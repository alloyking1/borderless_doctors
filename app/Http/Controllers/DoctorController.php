<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

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
        // $validate = $request->validate([
        //     'phone' => 'required',
        //     'ssn' => 'required | string',
        //     'address' => 'required | string',
        //     'requestDetails' => 'required',
        //     'passport' => 'required|file|mimes:jpg,jpeg,png,doc,docx,csv,pdf'
        // ]);

        // dd($request->file);
        // $filePath = $this->fileUpload($request);

        // $application = Doctor::create([
        //     'phone' => $request->phone,
        //     'ssn' => $request->ssn,
        //     'address' => $request->address,
        //     'requestDetails' => $request->requestDetails,
        //     'passport' => $filePath
        // ]);

        $imageName = time() . '.' . $request->file('passport')->extension();
        $path = $request->file('passport')->move(public_path('images'), $imageName);
        dd($path->realpath);

        return redirect()->route('files.index')->withSuccess(__('Request submitted, we will get back to you shortly'));
    }

    public function fileUpload(Request $request)
    {
        dd($request->file->extension());
        return $fileName = auth()->id() . '_' . time() . '.' . $request->file->extension();

        // $type = $request->file->getClientMimeType();
        // $size = $request->file->getSize();

        // return $request->file->move(public_path('file'), $fileName);
    }
}
