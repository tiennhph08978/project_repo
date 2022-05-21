@extends('frontend::layouts.master')

@section('title', 'Register')

@section('content')
    <div class="content">
        <section class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email"
                                   aria-describedby="emailHelp" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirm">Password confirm</label>
                            <input type="password" class="form-control" id="password_confirm"
                                   placeholder="Password confirm">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </section>
    </div>
@endsection
