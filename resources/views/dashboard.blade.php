@extends('layouts.layout')
@section('title')
Dashboard
@endsection
@section('content')
<div class="dashboard eli-main">
    <div class="container ">
        <div class="row">
            <div class="col-md-6 col-md-12">
                <h1>{{$user->username}}</h1>
                
                <h4>What do you have to say?</h4>
                <form>
                    <div class="form-group">
                        <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post"></textarea>
                    </div>
                    <button type="button" id="add" class="mybtn2">Create Post</button>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                </form>
                {{ csrf_field() }}



                @foreach($posts as $post)
                        <article class="post">
                         <h4>{{$post->user->username}}</h4>
                            <p class="post-bod">
                                {{ $post->body }}
                            </p>
                            <div class="info">
                               made on {{ date('F d, Y', strtotime($post->created_at)) }}
                            </div>
                   </article>

         
                @endforeach
                    
                
            </div>
            
            
        </div>
    </div>
</div>

@endsection