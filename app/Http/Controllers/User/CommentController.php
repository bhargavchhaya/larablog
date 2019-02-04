<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\comments;
use App\Model\user\post;

class CommentController extends Controller
{
    public function index(post $post)
    {
        return response()->json($post->comments()->latest()->get());
    }
}
