<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $posts = Post::where('user_id', '=', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        // dd($posts);
        return view('dashboard', [
            'posts' => $posts
        ]);
    }
}
