<!DOCTYPE html>
<html>

<head>
    <title>Export PDF</title>
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
</head>

<body>

    <h2>Data Pegawai</h2>
    <table>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Divisi</th>
        </tr>
        @foreach($data as $p)
        <tr>
            <td>{{ $p->nip }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->tanggal_lahir }}</td>
            <td>{{ $p->divisi->nama_divisi ?? '-' }}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>