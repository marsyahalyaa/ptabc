<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('pegawai.cari');
    }

    public function cari(Request $request)
    {
        $pegawai = Pegawai::with('divisi')->where('nip', $request->nip)->first();
        return view('pegawai.cari', compact('pegawai'));
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'kode_divisi', 'kode_divisi');
    }

}
