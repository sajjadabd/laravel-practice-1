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

}
