@extends('layout')


    <!-- go to create page -->
    <div class="container">
      <a href="/create">Create new upload</a>
  </div>

@foreach($users as $user) 

<div class="container">
    <h2>username:{{$user->username}}</h2>
    <video width="320" height="240" controls>
      <source src="{{$user->file->url}}" type="video/mp4">
    </video>
    <p>user file_id:{{$user->file_id}}</p>
    <p>file id:{{$user->file->id}}</p>

    
    <button type="button" class="btn btn-info">View</button>
    <button type="button" class="btn btn-danger">Delete</button>
</div>


@endforeach












