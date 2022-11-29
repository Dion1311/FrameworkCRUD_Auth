<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table-> string('nim',15);
            $table-> string('nama',250);
            $table-> integer('umur');
            $table-> string('kota',254);
            $table-> string('alamat',150);
            $table-> string('jurusan',50);
            $table-> string('kelas',50);
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
        Schema::dropIfExists('tabel_mahasiswas');
    }
}
