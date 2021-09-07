<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UsersPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    public function index()
    {
        $posts = Post::orderBy('updated_at','DESC')->get();
        return view('posts.userPosts')->with('posts', $posts);
    }
}
