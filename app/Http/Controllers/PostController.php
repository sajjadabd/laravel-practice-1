<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list() {
       $posts = Post::latest()->with('user')->get();
       
       return $posts;
       //return view('home' , compact('posts'));
    }

    public function createPost() {

      return view('create-post');
    }


    public function storePost(Request $request) {

      

      //error_log('create post successfully');
      //$content = $request->input('content');
      $content = $request->all();
      //error_log($content);

      return $content;

    }

}
