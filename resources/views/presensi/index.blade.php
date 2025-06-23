<!DOCTYPE html>
<html>
<head>
    <title>Presensi Pegawai</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; }
    </style>
</head>
<body>

    <h2>Data Presensi Pegawai</h2>

    <form method="POST" action="{{ route('presensi.filter') }}">
        @csrf
        <label>Pilih Tanggal:</label>
        <input type="date" name="tanggal" required>
        <button type="submit">OK</button>
    </form>

    @isset($presensi)
        <h4>Data Presensi Tanggal: {{ \Carbon\Carbon::parse($tanggal)->translatedFormat('j F Y') }}</h4>
        <table>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jam Masuk</th>
                <th>Jam Pulang</th>
            </tr>
            @foreach($presensi as $i => $p)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $p->nip }}</td>
                    <td>{{ $p->pegawai->nama ?? '-' }}</td>
                    <td>{{ $p->jam_masuk }}</td>
                    <td>{{ $p->jam_pulang }}</td>
                </tr>
            @endforeach
        </table>

        @if($presensi->isEmpty())
            <p>Tidak ada data presensi pada tanggal tersebut.</p>
        @endif
    @endisset

</body>
</html>
