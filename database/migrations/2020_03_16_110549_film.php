<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Film extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('film', function(Blueprint $table){
            $table->id();
            $table->string('kode_film');
            $table->string('judul_film');
            $table->string('genre_film');
            $table->string('negara');
            $table->string('tahun');
            $table->string('harga');
            $table->string('status');
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
        Schema::dropIfExists('film');
    }
}
