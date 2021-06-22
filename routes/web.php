<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', [HomeController::class, 'index']);

Route::get('user',  [UserController::class, 'user']);
Route::post('user_register',  [UserController::class, 'register']);

Route::get('role',  [RoleController::class, 'role']);
Route::post('role_register',  [RoleController::class, 'register_role']);

Route::get('add_login',  [UserController::class, 'showLogin']);
Route::post('login_form',  [UserController::class, 'login']);

Route::get('show_post',  [PostController::class, 'show_post'])->middleware('protectedIsLogin');
Route::get('post/{id}',  [PostController::class, 'show']);
Route::post('add_post',  [PostController::class, 'submit_post']);
Route::post('comment',  [PostController::class, 'submit_post']);

Route::post('comment',[CommentController::class,'store']);
Route::get('comments/{id}',[CommentController::class,'index']);

Route::post('logout',  [PostController::class, 'logout']);
