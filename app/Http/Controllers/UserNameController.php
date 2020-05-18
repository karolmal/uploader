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
        $users = User::latest()->get();

        // I was thinking i also have to send data from files table to view but i dont think so coz i can just use relationship, user->file->something here
 
        return view('users.index', ['users' => $users]);
    }



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

         $users = User::latest()->get();

         return view('users.index', ['users' => $users]);
 }

   
    public function show($id)
    
    {

        $user = User::find($id);
        
        return view('users.show', ['user' => $user]);

    }

}
