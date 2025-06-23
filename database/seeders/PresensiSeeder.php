<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresensiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tbl_presensi')->insert([
            [
                'tanggal' => '2018-01-02',
                'nip' => 11234,
                'jam_masuk' => '08:10:00',
                'jam_pulang' => '17:40:00',
            ],
            [
                'tanggal' => '2018-01-02',
                'nip' => 11235,
                'jam_masuk' => '08:00:00',
                'jam_pulang' => '17:07:00',
            ],
            [
                'tanggal' => '2018-01-02',
                'nip' => 11236,
                'jam_masuk' => '07:00:00',
                'jam_pulang' => '16:30:00',
            ],
            [
                'tanggal' => '2018-01-02',
                'nip' => 11237,
                'jam_masuk' => '07:15:00',
                'jam_pulang' => '16:40:00',
            ],
            [
                'tanggal' => '2018-01-02',
                'nip' => 11238,
                'jam_masuk' => '07:55:00',
                'jam_pulang' => '17:30:00',
            ],
            [
                'tanggal' => '2018-01-02',
                'nip' => 11239,
                'jam_masuk' => '07:20:00',
                'jam_pulang' => '16:20:00',
            ],
        ]);
    }
}
