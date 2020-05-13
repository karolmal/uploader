<?php

namespace App\Http\Controllers;

use App\User;
use App\File;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class UserNameController extends Controller
{

    // Collect username and send it to index
    public function index() 
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);



    }



    // Store username
    public function store(Request $request)
    {

 //Validate submitted data
 $request->validate([
     'username' => 'required|string',
     'file_id' => 'required|integer',
]);
    $user = new User();
         $data = $request->all(); 

         if(isset($data['file_id'])) {
             $file = File::find($data['file_id']);
             $user->file()->associate($file);
         }
         $user->fill($data); 
         $user->save();

         $user = User::all();

         return view('show', ['user' => $user]);
 }

}
