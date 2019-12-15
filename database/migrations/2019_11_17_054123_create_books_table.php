<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->char('penulisBK', 100);
            $table->char('judulBK', 100);
            table->char('isbnBK', 40))->nullable();
            $table->char('kategoriBK', 20)->nullable();
            $table->longText('deskripsiBK')->nullable();
            $table->char('statusBK', 10)->default('Tersedia');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
