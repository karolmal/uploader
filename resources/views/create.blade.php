@extends('layout')

@section('form')
    <div class="containter">
        <form action="/file" method="POST"  enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone">
        @csrf 
        
    </form>
</div>

@endsection