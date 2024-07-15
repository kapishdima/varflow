<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectWebResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {

        $posts = Post::all();

        return view('pages.posts', [
            'posts' => $posts,
        ]);
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('pages.post', [
            'post' => $post,
        ]);
    }
}
