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
        $userfile = User::find(9)->file; // select from file where user_id = 9
        $files = File::all();

        

        

        return view('users.index', ['userfile' => $userfile, 'users' => $users, 'files' => $files],);



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
