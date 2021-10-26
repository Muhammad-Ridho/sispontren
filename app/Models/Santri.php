<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    // use HasFactory;
    protected $table = 'dtsantri';
    protected $fillable = ['noInduk','tglMasuk','nisn','idKelas','namSantri','tmpLahir','tglLahir','jnsKelamin','alamat','statusSosial','idOrangTua','statusStudi','tglKeluar'];

}
