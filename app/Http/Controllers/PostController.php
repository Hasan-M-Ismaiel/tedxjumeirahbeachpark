<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Postsars;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index(){

        return view('posts.index',[
            'posts'=>Post::latest()->filter(
                request(['search'])
                )->paginate(6)->withQueryString(),
        ]);
    }

    public function show(Post $post){
        return view('posts.show',[
            'post' => $post
        ]);
    }
    
    public function showAr(Post $post){
        $postId = $post->id;
        $postar = Postsars::where('id', $postId)->first();
        return view('posts.showAr',[
            'post' => $post,
            'postar' => $postar,
        ]);
    }
    
}
