<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisastersTable extends Migration
{
    public function up()
    {
        Schema::create('disasters', function (Blueprint $table) {
            $table->id();
            $table->enum('tipe', ['alam', 'non-alam']);
            $table->string('no_bencana');
            $table->string('nama_bencana');
            $table->date('tanggal_kejadian');
            $table->string('alamat');
            $table->string('diinput_oleh');
            $table->enum('status', ['Proses Entry', 'Menunggu Konfirmasi', 'DATA DITERIMA', 'Ditolak']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('disasters');
    }
}