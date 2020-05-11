<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable = ['username'];

    public function file(){
        return $this->belongsTo(File::class);
    }
}
