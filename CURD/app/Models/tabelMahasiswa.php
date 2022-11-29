<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabelMahasiswa extends Model
{
    use HasFactory;
    protected $table ='tabel_mahasiswas';
    protected $fillable = [

        'nim',
        'nama',
        'umur',
        'kota',
        'alamat',
        'jurusan',
        'kelas',

    ];

    protected $hidden;
}
