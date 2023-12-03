@extends('layout')

@section('content')
    <body>
    <div class="container">
        <form action="/posts/{{$post->id}}" method="post">
            @csrf
            @method('PUT') <!-- Add this line to mimic a PUT request -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{$post->title}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="body">Content</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="10" required>{{$post->body}}</textarea>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
