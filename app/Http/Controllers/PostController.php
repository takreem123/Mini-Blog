<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;
class PostController extends Controller
{
    public function show_post(){
     return view('post');
    }
    public function submit_post(Request $request){  
  $validatedData = $request->validate([
    'title' => ['required', 'unique:posts'],
    'body' => ['required'],
    'thumbnail' => ['required'],
]);
           $post_obj = new Post;
           $post_obj->title = $request->title;
           $post_obj->body = $request->body;
           $path = $request->file('thumbnail')->store('avatars', 'public');
           $post_obj->thumbnail = $path;
           $post_obj->user_id = Auth::id();
      // save data
      $post_obj->save();

      return back()->with('success','Post added successfully.');
    }

    public function Show($id){
      return view('coment',compact("id"));
    }

    public function logout(){
      Auth::logout();
      return redirect('add_login');
    }
}
