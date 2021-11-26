<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user, Post $post)
    {
        $posts = User::find($user->id)->posts();
        return view('User.index')->with(['posts' => $posts->orderBy('updated_at', 'DESC')->paginate(3),
        'user' => $user]);
    }
}
