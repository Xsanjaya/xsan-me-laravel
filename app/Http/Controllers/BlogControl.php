<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogControl extends Controller
{
    public function index()
    {
        return view('table-blog');
    }

    
}
