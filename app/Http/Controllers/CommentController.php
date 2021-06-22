<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    public function store(Request $request){
        //  return $request->all();
  $validatedData = $request->validate([
    'coment' => ['required'],

]);
           $coment_obj = new Comment;
           $coment_obj->coment = $request->coment;
           $coment_obj->post_id= $request->id;
       
           $coment_obj->save();

           return back()->with('success','Comment Added.');

    }

    public function index($id){
        $comments=Comment::where('post_id',$id)->get();
        return view('comments',compact('comments'));
    }
}
