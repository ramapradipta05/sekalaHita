<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaMatkulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_matkul', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('mahasiswa_id')->unsigned();
            $table->bigInteger('mata_kuliah_id')->unsigned();
            $table->softDeletes();
            
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->foreign('mata_kuliah_id')->references('id')->on('mata_kuliah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_matkul');
    }
}
