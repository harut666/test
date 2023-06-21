@extends('layouts.main')
@section('content')
<div>
    <form action="{{route('post.update',$post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Write your text here" value="{{$post->title}}">
            <div id="titleHelp" class="form-text">The text does not always make sense</div>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea type="content" name="content" class="form-control" id="content" placeholder="Write your text here" >{{$post->content}}</textarea>
            <div id="contentHelp" class="form-text">The content does not always make sense</div>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Write your text here" value="{{$post->image}}">
            <div id="textHelp" class="form-text">The image does not always make sense</div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

