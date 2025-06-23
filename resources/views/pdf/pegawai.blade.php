<table>
    <thead>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Divisi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $p)
        <tr>
            <td>{{ $p->nip }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ \Carbon\Carbon::parse($p->tanggal_lahir)->translatedFormat('j F Y') }}</td>
            <td>{{ $p->divisi->nama_divisi ?? '-' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
