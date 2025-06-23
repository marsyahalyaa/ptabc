<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\ExportController;

Route::get('/', function () {
    return view('layout.index');
});

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::post('/pegawai/cari', [PegawaiController::class, 'cari'])->name('pegawai.cari');

Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi.index');
Route::post('/presensi', [PresensiController::class, 'filter'])->name('presensi.filter');

Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi.index');
Route::post('/divisi/filter', [DivisiController::class, 'filter'])->name('divisi.filter');

Route::get('/export', [ExportController::class, 'showExportForm'])->name('export.form');
Route::post('/export/excel', [ExportController::class, 'exportExcel'])->name('export.excel');
Route::post('/export/pdf', [ExportController::class, 'exportPdf'])->name('export.pdf');
