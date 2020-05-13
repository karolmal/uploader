@extends('layout')


@foreach ($users as $user)
    {{$user->username}};
    {{$user->file_id}};
@endforeach
