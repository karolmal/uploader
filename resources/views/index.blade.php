@extends('layout')

@section('content')
    <!-- go to create page -->
    <div class="container">
        <a href="/file/create">Create</a>
    </div>

@endsection

@section('form')

    <!-- form to upload video -->
    <div class="container">
        <form action="{{route('store')}}" method="POST"  enctype="multipart/form-data" id="form-id">
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
    {{-- <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div> --}}

            <div class="dropzone my-dropzone"></div>


    <button type="submit">
        Save Post
    </button>

    </form>
    {{-- <input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"> --}}

</div>




@endsection

