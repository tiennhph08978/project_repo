@extends('frontend::layouts.master')

@section('title', 'Login')

@section('content')
    <div class="content">
        <section class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('login.post') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email"
                                   aria-describedby="emailHelp" name="email" placeholder="Enter email">
                                   @error('email')
                                       <p class="text-danger">{{ $message }}</p>
                                   @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                                   placeholder="Password">
                                   @error('password')
                                       <p class="text-danger">{{ $message }}</p>
                                   @enderror
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </section>
    </div>
@endsection
