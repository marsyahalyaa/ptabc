<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_pegawai', function (Blueprint $table) {
            $table->bigInteger('nip')->primary();
            $table->string('nama');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('kode_divisi');
            $table->foreign('kode_divisi')->references('kode_divisi')->on('tbl_divisi')->onDelete('cascade');
            $table->timestamps();
        });
    }
};
