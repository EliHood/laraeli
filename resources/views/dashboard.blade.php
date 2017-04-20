@extends('layouts.layout')
@section('title')
Dashboard
@endsection
@section('content')
<div class="dashboard eli-main">
    <div class="container ">
        <div class="row">
            <div class="col-md-6 col-md-12 push-right">
                <h1>{{$user->username}}</h1>

                <h4>What do you have to say?</h4>
                <form class="make-post">
                    <div class="form-group">
                        <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post"></textarea>
                    </div>
                    <button type="button" id="add" class="mybtn2">Create Post</button>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                </form>
                {{ csrf_field() }}


                <article id="owl6" class="post"></article>
                 
                @foreach($posts as $post)
                        <article class="post eli-main" data-postid="{{ $post->id }}">
                         <h3>{{$post->user->username}}</h3>
                            <p id="ed" class="post-bod">{{$post->body}}</p>
                            <div class="info">
                               made on {{ date('F d, Y', strtotime($post->created_at)) }}
                            </div>
                        <div class="interaction">
                            @if(Auth::user() == $post->user)
                                
                                <a href="#" class="edit">Edit</a> |
                                 <a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>
                           
                            @endif
                        </div>

                   </article>


                @endforeach
                
                
               

            </div>


        </div>
    </div>
</div>
    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title">Edit Post</h2>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="post-body">Edit the Post</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    <script>
        var token = '{{ Session::token() }}';

        var urlEdit = '{{ route('edit') }}';
     
    </script>
@endsection