@extends('layout')


@foreach ($users as $user)
    {{$user->username}};
@endforeach
