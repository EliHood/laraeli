@extends('layouts.layout')

@section('title')
Log In
@endsection

@section('content')
    <div class="container eli-main">
        <div class="row">
            <div class="col-md-6">
                <h1>Sign in</h1>
                <form class="myform" action="{{ url('signin') }}" method="post">
                    <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                        <label for="email">Your E-Mail</label>
                        <input class="form-control" type="text" name="email" id="email"/>
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'has-error': '' }}">
                        <label for="password">Your Password</label>
                        <input class="form-control" type="password" name="password" id="password"/>
                    </div>

                    <span>
                        <input type="checkbox" name="remember_me" id="checkbox"/>
                        <label id="rememberlab" for="checkbox">Remember Me</label>

                       </span><br/>


                    <button type="submit" class="form-btn">Submit</button>
                    <input type="hidden" name="_token" value="{{ Session::token()}}"/>
                </form>
            </div>
        </div>
    </div>
@endsection