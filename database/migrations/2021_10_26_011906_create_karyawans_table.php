<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtKaryawan', function (Blueprint $table) {
            $table->id();
            $table->string('kodePegawai')->nullable();
            $table->string('namaKaryawan')->nullable();
            $table->string('tmpLahir')->nullable();
            $table->date('tglLahir')->nullable();
            $table->enum('jnsKelamin', ['Laki-Laki', 'Perempuan'])->nullable();
            $table->string('alamat')->nullable();
            $table->enum('statusPekerjaan', ['Pengabdian', 'Kontrak', 'Tetap'])->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dtKaryawan');
    }
}
