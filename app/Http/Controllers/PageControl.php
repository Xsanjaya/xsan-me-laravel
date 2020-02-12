<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class PageControl extends Controller
{
    public function index()
    {
       return view('home');
        // return view('soon');
    }
    
    public function buku()
    {
        $books = Book::all();
        $book = $books->sortBy('penulisBK');

        return view('buku',['book'=>$book]);
        
    }
   

}
