<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_divisi', function (Blueprint $table) {
            $table->string('kode_divisi')->primary();
            $table->string('nama_divisi');
            $table->string('pimpinan_divisi');
            $table->timestamps();
        });
    }
};
