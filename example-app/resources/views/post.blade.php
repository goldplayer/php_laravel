@extends('layouts.main')
@section('content')
    <h1>Posts</h1>

    @foreach($posts as $post)
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>
    @endforeach

@endsection
