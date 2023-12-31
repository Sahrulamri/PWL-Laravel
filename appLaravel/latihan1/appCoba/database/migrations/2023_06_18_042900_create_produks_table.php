<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTables extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->String('nama');
            $table->decimal('hrg');
            $table->integer('jml');
            // $table->String('keterangan');
            // $table->String('foto');
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
        Schema::dropIfExists('produks');
    }
};
