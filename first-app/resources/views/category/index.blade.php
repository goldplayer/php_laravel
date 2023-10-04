@extends('layouts.main')

@section('content')
    

    <section class="category">
        <div class="container">
            <div class="row">
                @foreach ($categories as $item)
                    <ul>
                        <li><a href="{{route('category.show', $item->id)}}">{{$item->title}}</a>  <br>  <small><a href="{{route('category.edit', $item->id)}}">Edit</a></small></li>    
                    </ul>   
                @endforeach
                <button class="create_category"><a href="{{route('category.create')}}">Create New Category</a></button>
            </div>
        </div>
    </section>

@endsection