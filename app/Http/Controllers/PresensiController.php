<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;

class PresensiController extends Controller
{
    public function index()
    {
        return view('presensi.index');
    }

    public function filter(Request $request)
    {
        $tanggal = $request->tanggal;

        $presensi = Presensi::with('pegawai')
            ->whereDate('tanggal', $tanggal)
            ->get();

        return view('presensi.index', compact('presensi', 'tanggal'));
    }
}
