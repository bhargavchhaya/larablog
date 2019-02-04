<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\sections;
use App\Model\user\comments;

class PostController extends Controller
{
    //
    public function post(post $post)
    {
        $sections = sections::all();
        $comments = comments::all();
        return view('user.post', compact(['post', 'sections', 'comments']));
    }

}
