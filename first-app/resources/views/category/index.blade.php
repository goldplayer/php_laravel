@extends('layouts.main')

@section('content')
    

    <section class="category">
        <div class="container">
            <div class="row">
                <button class="create_category"><a href="{{route('category.create')}}">Create New Category</a></button>
            </div>
        </div>
    </section>

@endsection