<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;

class DashboardControl extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
        {
            if(!auth()->user()){
                return redirect('/login');
            }
            return view('dashboard.index');
        }

    public function bookedit(Book $book, $id)
        {
            $book = $book->find($id);
            return view('dashboard.book-edit',
                [
                    'dbk'=>$book,
                    'id'=>$id,
                ] );
           
        }

}
