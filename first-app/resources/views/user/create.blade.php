@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">FIO</label>
                        <div class="col-sm-10">
                            <input type="text" name="fio" class="form-control" id="inputEmail3">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-10">
                            <input type="number" name="age" class="form-control" id="inputEmail3">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Sex</label>
                        <div class="col-sm-10">
                            <input type="text" name="sex" placeholder="Male or Female of Other" class="form-control" id="inputEmail3">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="inputEmail3">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-10">
                            <input type="text" name="country" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Registration</button>
                </form>
            </div>
        </div>
    </div>

@endsection
