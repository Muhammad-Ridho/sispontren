<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtSantri', function (Blueprint $table) {
            $table->id();
            $table->string('noInduk')->nullable();
            $table->date('tglMasuk')->nullable();
            $table->string('nisn')->nullable();
            $table->string('namaSantri')->nullable();
            $table->string('tmpLahir')->nullable();
            $table->date('tglLahir')->nullable();
            $table->enum('jnsKelamin', ['Laki-Laki', 'Perempuan'])->nullable();
            $table->string('alamat')->nullable();
            $table->enum('statusSosial', ['Yatim', 'Dhuafa Fakir', 'Dhuafa Miskin', 'Mampu'])->nullable();
            $table->enum('statusStudi', ['Aktif', 'Non-Aktif'])->nullable();
            $table->date('tglKeluar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dtSantri');
    }
}
