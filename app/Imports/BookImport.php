<?php

namespace App\Imports;

use App\Book;
use Maatwebsite\Excel\Concerns\ToModel;

class BookImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Book([

            'penulisBK' => $row[1],
            'judulBK' => $row[2],

        ]);
    }
}
