<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;

class Presensi extends Model
{
    protected $table = 'tbl_presensi';

    protected $fillable = ['nip', 'tanggal', 'jam_masuk', 'jam_pulang'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'nip', 'nip');
    }
}
