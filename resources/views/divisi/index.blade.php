@extends('layout.index')

@section('content')
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 8px;
    }
</style>

<h2>Data Pegawai per Divisi</h2>

<form method="POST" action="{{ route('divisi.filter') }}">
    @csrf
    <label>Pilih Divisi:</label>
    <select name="kode_divisi" required>
        <option value="">-- Pilih Divisi --</option>
        @foreach($divisi as $d)
        <option value="{{ $d->kode_divisi }}" {{ isset($divisiTerpilih) && $divisiTerpilih->kode_divisi ==
            $d->kode_divisi ? 'selected' : '' }}>
            {{ $d->nama_divisi }}
        </option>
        @endforeach
    </select>
    <button type="submit">OK</button>
</form>

@isset($pegawai)
<h4>Data Pegawai di Divisi: <b>{{ $divisiTerpilih->nama_divisi }}</b></h4>
@if($pegawai->isEmpty())
<p><i>Tidak ada pegawai di divisi ini.</i></p>
@else
<table>
    <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
    </tr>
    @foreach($pegawai as $i => $p)
    <tr>
        <td>{{ $i + 1 }}</td>
        <td>{{ $p->nip }}</td>
        <td>{{ $p->nama }}</td>
    </tr>
    @endforeach
</table>
@endif
@endisset

@endsection