@extends('layout')


    <!-- go to create page -->
    <div class="container">
      <a href="/files/create">Create new upload</a>
      <a href="/file">Show Articles</a>
  </div>

@foreach($users as $user) 

<div class="container">
    <h2>username:{{$user->username}}</h2>
    <video width="320" height="240" controls>
      <source src="{{$user->file->url}}" type="video/mp4">
    </video>
    <p>user file_id:{{$user->file_id}}</p>
    <p>file id:{{$user->file->id}}</p>

    
    {{-- this show route has to be fixed --}}
  <button type="button" class="btn btn-info"><a href="/files/{{$user->file_id}}">{{$user->username}}</a></button>
    <form action="{{route('destroy',['file' => $user->file_id])}}" method="POST">
      @method('DELETE')
      @csrf
      <button type="submit">Delete</button>               
     </form>
</div>


@endforeach












