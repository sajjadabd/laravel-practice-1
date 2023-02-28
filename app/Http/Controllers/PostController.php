<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list() {
       $posts = Post::all();

       return view('home' , compact('posts'));
    }

    public function createPost() {

      return view('create-post');
    }


    public function storePost(Request $request) {


      error_log('create post successfully');
      $content = $request->input('content');
      error_log($content);

      return redirect('/');
    }

}
