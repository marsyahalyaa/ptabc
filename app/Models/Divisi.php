<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'tbl_divisi';

    public function pegawai() {
        return $this->hasMany(Pegawai::class, 'kode_divisi', 'kode_divisi');
    }
    
}

