@extends('layouts.main')

@section('content')
    <section class="welcome">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 text-center">
                    <h1>Welcome to Test Laravel WebSite</h1>

                    <div class="option">
                        <ul class="_list">
                            <li class="_item"><a href="{{route('user.index')}}">You can create/update/delete and just look "Users"</a></li>
                            <li class="_item"></li>
                            <li class="_item"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
