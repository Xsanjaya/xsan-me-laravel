<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostControl extends Controller
{
    public function index()
    {
        return view('dashboard.blog.table-post');
    }

    public function crtPost()
    {
        return view('dashboard.blog.create-post');
    }
}
