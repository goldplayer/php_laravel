@extends('layouts.main')

@section('content')

    <div class="container">

        <div class="row">
         <div class="col-lg-2">
             <h1>User List</h1>
             <button class="btn btn-dark"><a class="route-link" href="{{route('user.create')}}">Create btn</a></button>
         </div>
        </div>


            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Sex</th>
                    <th scope="col">Country</th>
                    <th scope="col">Create Date</th>
                    <th scope="col">Update Date</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <th>
                        {{$user->id}}
                    </th>
                    <th><a href="{{route('user.show', $user->id)}}">{{$user->fio}}</a></th>
                    <th>{{$user->age}}</th>
                    <th>{{$user->sex}}</th>
                    <th>{{$user->country}}</th>
                    <th>{{$user->created_at}}</th>
                    <th>{{$user->updated_at}}</th>
                    <th><a href="{{route('user.edit', $user->id)}}">Edit</a></th>
                </tr>
                @endforeach
                </tbody>
            </table>


    </div>

@endsection
