@extends('layout.index')

@section('content')
<style>
    .form-group {
        margin-bottom: 15px;
    }

    .readonly-input {
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        padding: 6px;
        width: 300px;
    }
</style>

<h2>Pencarian Data Pegawai</h2>

<form method="POST" action="{{ route('pegawai.cari') }}">
    @csrf
    <div class="form-group">
        <label>Masukkan NIP:</label>
        <input type="text" name="nip" class="border" required>
        <button type="submit">Cari</button>
    </div>
</form>

@isset($pegawai)
<h3>Hasil Pencarian Data Pegawai</h3>
<div class="form-group">
    <label>Nama:</label><br>
    <input type="text" class="readonly-input" value="{{ $pegawai->nama }}" readonly>
</div>
<div class="form-group">
    <label>Alamat:</label><br>
    <input type="text" class="readonly-input" value="{{ $pegawai->alamat }}" readonly>
</div>
<div class="form-group">
    <label>Tanggal Lahir:</label><br>
    <input type="text" class="readonly-input"
        value="{{ \Carbon\Carbon::parse($pegawai->tanggal_lahir)->translatedFormat('j F Y') }}" readonly>
</div>
<div class="form-group">
    <label>Divisi:</label><br>
    <input type="text" class="readonly-input" value="{{ $pegawai->divisi->nama_divisi }}" readonly>
</div>
@elseif(request()->isMethod('post'))
<p>❌ Data pegawai tidak ditemukan.</p>
@endisset

@endsection