<?php

namespace App\Http\Controllers;
use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    //  Take data from database and return in to the view
    public function index() 
    {
        $files = File::all();

        return view('index', ['files' => $files]);
    }

     // Go to new page to create new upload
    public function create()
    {
        return view('create');
    }

    // Store a file
    public function store(Request $request)
    {
        $this->validate($request, [
            //'file' => 'required|mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv',
            'username' => 'required'
        ]);
            $file = New File();

            $uploadedFile = $request->file('file',null);
            dd($request->all());
             $file->name = $uploadedFile->getClientOriginalName();
            // $file->mime_type = $uploadedFile->getMimeType();
            // $file->file_type = $uploadedFile->getClientOriginalExtension();
            $file->addMedia($uploadedFile)->toMediaCollection('files');
            $file->username = $request->input('username');
            $file->save();
        }
    }


