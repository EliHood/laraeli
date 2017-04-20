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
        $posts = Post::whereUserId(Auth::id())->get();
        $cookie = cookie('saw-dashboard', true, 15);
        $users = User::find('user_id');
        $user = new User();
//        return view('dashboard', array('user'=> Auth::user()), compact('users'))->withCookie($cookie);

        return view('dashboard',array('user'=> Auth::user(), 'posts' => $posts,  compact('users')))->withCookie($cookie);
    
    } 


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
         $post->load('user');
         return response ()->json( $post );
      }
  }


    public function postEditPost(Request $request)
    {
        //validate
        $this->validate($request, [
            'body' => 'required'
        ]);
        //if pass validate - find the post id
        $post = Post::find($request['postId']);
        //check use is allowed to edit
        if (Auth::user() != $post->user) {
            return redirect()->back();
        }
        //edit body
        $post->body = $request['body'];
        //update -not save
        $post->update();
        //set response
        //test - return response()->json(['message' => 'post edited'], 200);
        return response()->json(['new_body' => $post->body], 200);
        

    }

    public function getDeletePost($post_id)
    {
      $post = Post::where('id', $post_id)->first();
      if(Auth::user() != $post->user){
        return redirect()->back();
      }
      $post->delete();
      return redirect()->route('dashboard');
    }

    
}
