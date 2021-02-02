<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('store');
    }
    public function index(){    
        return view('create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => ['required', 'max:100'],
            'description' => 'required|max:255'
        ]);
        
        //  auth()-user()->posts()->create($request->only('name', 'description')); #This can be tweaked to work as the function below
        // $request->user()->posts()->create($request->only('name', 'description'));
        $post = new Post();
        $post->user_id = auth()->user()->id;
        $post->name = $request->name;
        $post->description = $request->description;
        $post->save();

        return back()->with('msg', 'Todo created');
    }

    public function edit($id){
        $post = Post::find($id);
        return view('edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request, $id){
        $post = Post::find($id);
        $post->name = $request->name;
        $post->description = $request->description;
        $post->update();
        return redirect()->route('dashboard')->with('msg', 'Updated');
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('dashboard');
    }
}
