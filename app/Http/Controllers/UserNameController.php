<?php

namespace App\Http\Controllers;

use App\User;
use App\File;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class UserNameController extends Controller
{

    
    public function index() 
    {
        $users = User::all();
        $files = File::all();

        return view('users.index', ['users' => $users, 'files' => $files]);



    }



    // Store username
    public function store(Request $request)
    {

 //Validate submitted data
 $request->validate([
     'username' => 'required|string',
     'file_id' => 'required|integer',
]);
    $users = new User();
         $data = $request->all(); 

         if(isset($data['file_id'])) {
             $file = File::find($data['file_id']);
             $users->file()->associate($file);
         }
         $users->fill($data); 
         $users->save();

         $users = User::all();
         $files = File::all();

         return view('users.index', ['users' => $users, 'files' => $files]);
 }

}
