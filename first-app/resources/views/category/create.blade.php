@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <form action="{{route('category.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <div class="mb-3">
                        <input type="text" name="title" placeholder="enter the name of category">
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
