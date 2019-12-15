<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogControl extends Controller
{
    public function index()
    {
        return view('table-blog');
    }

    
}
