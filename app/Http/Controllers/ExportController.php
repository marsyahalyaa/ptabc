<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Exports\PegawaiExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ExportController extends Controller
{
    public function showExportForm()
    {
        $pegawai = Pegawai::with('divisi')->get();
        return view('export.form', compact('pegawai'));
    }

    public function exportExcel(\Illuminate\Http\Request $request)
    {
        $ids = $request->input('export_ids', []);
        $data = Pegawai::with('divisi')->whereIn('nip', $ids)->get();

        return Excel::download(new PegawaiExport($data), 'pegawai.xlsx');
    }

    public function exportPdf(\Illuminate\Http\Request $request)
    {
        $ids = $request->input('export_ids', []);
        $data = Pegawai::with('divisi')->whereIn('nip', $ids)->get();
        $pdf = Pdf::loadView('export.pdf', compact('data'));

        return $pdf->download('pegawai.pdf');
    }
}
