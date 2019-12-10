<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['penulisBK', 'judulBK', 'isbnBK', 'kategoriBK', 'deskripsiBK', 'statusBK'];
}
