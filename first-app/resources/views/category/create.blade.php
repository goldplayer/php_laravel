@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
     
            <form action="{{route('category.store')}}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" name="create_category" class="btn btn-primary">Submit</button>
              </form>
       
        </div>
    </div>

@endsection
