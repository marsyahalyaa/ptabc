<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_presensi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->bigInteger('nip');
            $table->time('jam_masuk');
            $table->time('jam_pulang');
            $table->foreign('nip')->references('nip')->on('tbl_pegawai')->onDelete('cascade');
            $table->timestamps();
        });
    }
};
