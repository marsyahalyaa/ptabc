<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tbl_divisi')->insert([
            [
                'kode_divisi' => 'S1',
                'nama_divisi' => 'Gudang',
                'pimpinan_divisi' => 'Beni Permana, SE',
            ],
            [
                'kode_divisi' => 'S2',
                'nama_divisi' => 'Produksi',
                'pimpinan_divisi' => 'Syaiful Bachri, ST',
            ],
            [
                'kode_divisi' => 'S3',
                'nama_divisi' => 'HRD',
                'pimpinan_divisi' => 'Dr. Anggit Darmawan',
            ],
        ]);
    }
}
