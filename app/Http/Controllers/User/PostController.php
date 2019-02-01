<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\sections;

class PostController extends Controller
{
    //
    public function post(post $post)
    {
        $sections = sections::all();
        return view('user.post', compact(['post', 'sections']));
    }
}
