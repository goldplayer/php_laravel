@extends('layouts.main')
@section('content')


    <div class="container">
     <div class="col-md-4 mx-auto">
         <form action="{{route('role.store')}}" method="post">
             @csrf
             <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Role Name</label>
                 <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
             </div>
             <button type="submit" class="btn btn-primary">Create</button>
         </form>
     </div>
    </div>

@endsection

