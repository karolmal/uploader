@extends('layout')

<div class="container">
    <a href="/files/create">Create new upload</a>
    <a href="/files">Show Articles</a>
</div>

<div class="container">
    <h2>username:{{$user->username}}</h2>
    <video width="320" height="240" controls>
      <source src="{{$user->file->url}}" type="video/mp4">
    </video>

    
    <form action="{{ url('/file/{file}', ['file' => $user->id]) }}" method="post">
        <input class="btn btn-default" type="submit" value="Delete" />
        <input type="hidden" name="_method" value="delete" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
</div>
