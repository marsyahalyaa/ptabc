@extends('layout.index')

@section('content')
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
        padding: 6px;
    }
</style>

<h2>Pilih Data Pegawai untuk Export</h2>

<form method="POST" action="{{ route('export.excel') }}">
    @csrf
    <table>
        <thead>
            <tr>
                <th>Pilih</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Divisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $p)
            <tr>
                <td><input type="checkbox" name="export_ids[]" value="{{ $p->nip }}"></td>
                <td>{{ $p->nip }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ \Carbon\Carbon::parse($p->tanggal_lahir)->translatedFormat('j F Y') }}</td>
                <td>{{ $p->divisi->nama_divisi ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <button type="submit">Export Terpilih ke Excel</button>
</form>

<form method="POST" action="{{ route('export.pdf') }}" style="margin-top: 20px;">
    @csrf
    @foreach ($pegawai as $p)
    <input type="hidden" name="export_ids[]" value="{{ $p->nip }}">
    @endforeach
    <button type="submit">Export Semua ke PDF</button>
</form>

@endsection