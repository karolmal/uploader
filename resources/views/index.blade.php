@extends('layout')

@section('content')
    <!-- go to create page -->
    <div class="container">
        <a href="/file/create">Create</a>
    </div>

@endsection

@section('form')

    <!-- form to upload video -->
    <div class="containter">
        <form action="{{route('store')}}" method="POST"  enctype="multipart/form-data" class="dropzone" id="media-dropzone">
        @csrf 

    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Post username">
    @if ($errors->any())
        <br/>
        <strong>Validation Errors:</strong><br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <hr/>

    <button type="submit">
        Save Post
    </button>

    </form>

</div>


@endsection