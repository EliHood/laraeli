<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{

    public function getDashboard()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $cookie = cookie('saw-dashboard', true, 15);
        $users = User::all();
        $user = new User();
//        return view('dashboard', array('user'=> Auth::user()), compact('users'))->withCookie($cookie);

        return view('dashboard',array('user'=> Auth::user(), 'posts' => $posts,  compact('users')))->withCookie($cookie);
    }


     	// public function postCreatePost(Request $request)
     	// {
     	// 	$this->validate($request,[
     	// 		'body' => 'required|max:1000'
     	// 	]);

     	// 	$post = new Post();
     	// 	$post->body = $request['body'];
     	// 	$message = 'There was an error';

     	// 	if($request->user()->posts()->save($post)){
     	// 		$message = 'Post Successfully Created';
     	// 	}

      //     return response ()->json( $post );

     	// }


  public function postCreatePost(Request $request) {
      $rules = array(
           'body' => 'required|max:1000'
      );

      $validator = Validator::make(Input::all(), $rules);

      if ($validator->fails()) {
         return Response::json (array(
                 'errors' => $validator->getMessageBag()->toArray ()
         ));
      } else {
         $post = new Post();
         $post->body = $request->body;
         $request->user()->posts()->save($post);
         return response ()->json( $post );
      }
  }

    
}
