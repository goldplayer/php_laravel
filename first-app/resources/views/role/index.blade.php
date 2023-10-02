@extends('layouts.main')
@section('content')

    <div class="container">
        <h1>Role Page</h1>

        <div>
            @foreach($role as $rol)
                <div>{{$rol -> id}} . <a href="{{route('role.show', $rol->id)}}">{{$rol->name}}</a> <a href="{{route('role.edit', $rol->id)}}">Edit</a></div>
            @endforeach
        </div>

        <a href="{{route('role.create')}}">Add New Role</a>
    </div>

@endsection

