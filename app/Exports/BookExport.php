<?php

namespace App\Exports;

use App\Book;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class BookExport implements FromCollection
{

  public function collection()
  {
      return Book::all();
  }


  // public function map($book): array
  // {
  //     return [
  //         $book->'penulisBK',
  //         $book->'judulBK',
  //         Date::dateTimeToExcel($invoice->created_at),
  //     ];
  // }



}
