@extends('layouts.layout')

@section('title')
Sign Up
@endsection

@section('content')
    <div class="container eli-main">
        <div class="row">
            <div class="col-md-6">
                <h1>Sign Up</h1>
                <form class="myform" action="{{ url('signup') }}" method="post">
                    <div class="form-group">
                        <label for="email">Your E-Mail</label>
                        <input class="form-control" value="{{ Request::old('email') }}" type="text" name="email" id="email"/>
                    </div>
                    <div class="form-group">
                        <label for="username">Your Username</label>
                        <input class="form-control" value="{{ Request::old('username')}}" type="text" name="username" id="username"/>
                    </div>

                    <div class="form-group">
                        <label for="Password">Your Password</label>
                        <input class="form-control" value="{{ Request::old('password')}}" type="password" name="password" id="password"/>
                    </div>

                    <button type="submit" class="form-btn">Submit</button>
                    <input type="hidden" name="_token" value="{{ Session::token()}}"/>
                </form>
            </div>
    </div>
@endsection