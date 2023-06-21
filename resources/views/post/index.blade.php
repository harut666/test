@extends('layouts.main')
@section('content')
    {{--в ссылке указываем путь и динамически айдишник который нужно вывести--}}
    <div>
        <a href="{{ route('post.create')}}" class="btn btn-dark " >Add one</a>
    </div>
<div>
    @foreach($posts as $post)
        <div>  <a href="{{ route('post.show',$post->id)}}">{{$post->id}}. {{$post->title}} - {{$post->image}}</a></div>
    @endforeach
</div>
@endsection

