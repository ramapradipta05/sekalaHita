<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('hari');
            $table->bigInteger('mata_kuliah_id')->unsigned();
            $table->bigInteger('dosen_id')->unsigned();
            $table->softDeletes();
            
            $table->foreign('dosen_id')->references('id')->on('dosen');
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
        Schema::dropIfExists('jadwal');
    }
}
