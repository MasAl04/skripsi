<h1>Data Hasil Kerja</h1>

<a href="/hasil/create">Tambah</a>

<table border="1">
    <tr>
        <th>Karyawan</th>
        <th>Pekerjaan</th>
        <th>Jumlah</th>
        <th>Tanggal</th>
    </tr>

    @foreach($data as $d)
    <tr>
        <td>{{ $d->karyawan->nama }}</td>
        <td>{{ $d->pekerjaan->nama_pekerjaan }}</td>
        <td>{{ $d->jumlah }}</td>
        <td>{{ $d->tanggal }}</td>
    </tr>
    @endforeach
</table>