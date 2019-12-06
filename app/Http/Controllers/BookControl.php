<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

use Session;

use App\Exports\BookExport;
use App\Imports\BookImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class BookControl extends Controller
{
    public function index()
    {
        $books = Book::all();
        $book = $books->sortBy('penulisBK');
        return view('dashboard.book-table',['book'=>$book]);
        
    }

    public function create(Request $request)
    {
        //
        Book::create($request->all());
        return redirect('dashboard/book')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    public function edit(Request $request, Book $book, $id)
    {
        $book = $book->find($id);
        $book->update($request->all());
        // $book->penulisBK = $request->penulisBK;
        // $book->judulBK = $request->judulBK;
        // $book->save();
        return redirect('dashboard/book')->with('pesan', 'Data Berhasil Diubah');

    }

    public function destroy(Book $book, $id)
    {   
        $book = $book->find($id);
        $book->delete();
        return redirect('dashboard/book')->with('pesan', 'Data Berhasil Dihapus');
    }
    
    public function export() 
    {
        return Excel::download(new BookExport, 'Book.xlsx');
    }


	public function import(Request $request) 
	{
        
        // validasi
		// $this->validate($request, [
		// 	'file' => 'required|mimes:csv,xls,xlsx'
		// ]);
 
		// menangkap file excel
		$file = $request->file('file');
        // dd($request);
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('book/excel',$nama_file);
 
		// import data
		Excel::import(new BookImport, public_path('/book/excel/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Siswa Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/dashboard/book');
	}

}
