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

 //Validate submitted data
 $request->validate([
    //Post Validation Rules
    // 'username' => 'required',
    //Media Validation Rules
    'file' => 'required|mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv',
   
]);
$file = new File();
        $uploadedFile = $request->file('file', null); // get file from request
        // $data = $request->only('username'); //The request also contains media attachments, so only get the data required for the post
        // $file->fill($data); // fill file model with data from form (username)
        $file->addMedia($uploadedFile)->toMediaCollection('files');  //add uploaded file to media collection
        $file->save(); //save file

         //Handle media
        //Items in media and media_original_name arrays from the request must be in the correct order in each array so the media and it's original name can be matched together by their array index
        foreach ($request->input('file', []) as $index => $file) {
            //Media Library should now attach file previously uploaded by Dropzone (prior to the post form being submitted) to the post
            $file->addMedia(storage_path("app/" . $file))
                ->usingName($request->input('file_original_name', [])[$index]) //get the media original name at the same index as the media item
                 ->toMediaCollection();
        }

        

        return $file->id; //redirect()->route('index')->with('success', 'Post created successfully.');
    }
}



