<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'tbl_pegawai';
    public $timestamps = true;

    public function divisi() {
        return $this->belongsTo(Divisi::class, 'kode_divisi', 'kode_divisi');
    }

    public function presensi() {
        return $this->hasMany(Presensi::class, 'nip', 'nip');
    }
}

