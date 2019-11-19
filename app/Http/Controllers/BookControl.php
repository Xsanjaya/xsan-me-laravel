<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookControl extends Controller
{
    public function index()
    {
        $book = Book::all();
        // dd($book);
        return view('dashboard.table-book',['book'=>$book]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        Book::create($request->all());
        return redirect('dashboard/book')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Book $book, $id)
    {
        $book = $book->find($id);
        $book->update($request->all());
        // $book->penulisBK = $request->penulisBK;
        // $book->judulBK = $request->judulBK;
        // $book->save();


        return redirect('dashboard/book')->with('pesan', 'Data Berhasil Diubah');


    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book, $id)
    {   
        $book = $book->find($id);
        $book->delete();
        return redirect('dashboard/book')->with('pesan', 'Data Berhasil Dihapus');
    }
}