<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable = ['username'];

    public function file(){
        return $this->belongsTo(File::class); // select from users where file_id = 1;

        // $user = User::find(1); select from user where id = 1
        // $user->file; select from file where file_id = 1
        // $user->file->first();
    }
}
