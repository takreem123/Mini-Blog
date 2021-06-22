<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class UserController extends Controller
{

  public function user(){
    return view('register');
  }
 public  function register(Request $req) {
  $validatedData = $req->validate([
    'first_name' => ['required'],
    'last_name' => ['required'],
    'username' => ['required', 'unique:users'],
    'phone_number' => ['required', 'unique:users'],
    'email' => ['required', 'unique:users'],
    'password' => ['required'],
    'profile_Picture' => ['required'],
]);
      $register_obj = new User;

      $register_obj->first_name = $req->first_name;
      $register_obj->last_name = $req->last_name;
      $register_obj->username = $req->username;
      $register_obj->phone_number = $req->phone_number;
      $register_obj->email = $req->email;
      $register_obj->password = bcrypt($req->password);
      $path = $req->file('profile_Picture')->store('avatars', 'public');
      $register_obj->profile_Picture = $path;
      $register_obj->role_id = 2;
      //$register_obj->user_id = Auth::id();
      // save data
      $register_obj->save();

      return redirect('user');
    }

    public function showLogin(){
      return view('auth.login');

    }

    public function login(Request $request){
      $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        if(Auth::user()->role_id==1){
          return view('register');
        }else{
          return redirect('/show_post');
          
        }
    }

    return back()->with(
        'error', 'Invalid Credentials',
    );

    }

  
}
