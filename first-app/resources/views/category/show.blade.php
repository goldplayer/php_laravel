@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <p>{{$category->title}}</p>
            <p>Created: {{$category->created_at}}</p>
            <p>Updated: {{$category->updated_at}}</p>
        </div>
    </div>

@endsection
