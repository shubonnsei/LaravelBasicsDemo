<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function show($slug){
        $post= Post::query()->where('slug',$slug)->firstOrFail();
        return view('post',['post'=>$post]);
    }
}
