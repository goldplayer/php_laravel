@extends('layouts.main')
@section('content')

    <div class="container">
        <div class="col-md-4 mx-auto">
            <h2>Change the role -> <span>'{{$role->name}}'</span></h2>
            <form action="{{route('role.update', $role->id)}}" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Role Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$role->name}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection

