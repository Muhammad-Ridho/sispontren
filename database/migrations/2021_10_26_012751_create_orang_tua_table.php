<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangTuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtOrangTua', function (Blueprint $table) {
            $table->id();
            $table->string('namaAyah')->nullable();
            $table->string('tmpLahirAyah')->nullable();
            $table->date('tglLahirAyah')->nullable();
            $table->string('pekerjaanAyah')->nullable();
            $table->string('namaIbu')->nullable();
            $table->string('tmpLahirIbu')->nullable();
            $table->date('tglLahirIbu')->nullable();
            $table->string('pekerjaanIbu')->nullable();
            $table->string('alamat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dtOrangTua');
    }
}
