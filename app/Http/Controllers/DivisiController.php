<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;
use App\Models\Pegawai;

class DivisiController extends Controller
{
    public function index()
    {
        $divisi = Divisi::all();
        return view('divisi.index', compact('divisi'));
    }

    public function filter(Request $request)
    {
        $divisi = Divisi::all();

        $pegawai = Pegawai::where('kode_divisi', $request->kode_divisi)->get();
        $divisiTerpilih = Divisi::where('kode_divisi', $request->kode_divisi)->first();

        return view('divisi.index', compact('divisi', 'pegawai', 'divisiTerpilih'));
    }
}
