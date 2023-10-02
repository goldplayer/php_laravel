@extends('layouts.main')
@section('content')

    <div class="container">
        <h1>Role Page</h1>

        <div>

            <div>{{$role -> id}} . {{$role->name}}</div>
            <div>{{$role->created_at}}</div>
            <a href="{{route('role.index')}}">Back</a>
        </div>
    </div>

@endsection

