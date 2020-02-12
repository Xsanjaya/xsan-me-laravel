<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;

class DashboardControl extends Controller
{
    
    public function index()
        {
            if(!auth()->user()){
                return redirect('/login');
            }

            $jmlbook=Book::all()->count();
            $jmluser=User::all()->count();

            return view('dashboard.index', [
                'jmlbook' => $jmlbook,
                'jmluser' => $jmluser,
            ]);
        }

    public function bookedit(Book $book, $id)
        {
            $book = $book->find($id);
            return view('dashboard.book-edit',
                [
                    'dbk'=>$book,
                    'id'=>$id,
                ]);
           
        }

}
