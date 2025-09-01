<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Cookie;

class FileUploadController extends Controller
{
    public function showForm()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,pdf,docx|max:2048',
        ]);

        // Store file inside storage/app/public/uploads
        $path = $request->file('file')->store('uploads', 'public');

        // Set cookie for success
        $cookie = cookie('file_uploaded', 'true', 60); // valid for 60 minutes

        return redirect()->route('upload.form')
                         ->with('success', 'File uploaded successfully!')
                         ->cookie($cookie);
    }
}
