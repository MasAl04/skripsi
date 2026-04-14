<h1>Data Penggajian</h1>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Total Gaji</th>
        <th>Kasbon</th>
        <th>Sisa</th>
    </tr>

    @foreach($data as $d)
    <tr>
        <td>{{ $d->karyawan->nama }}</td>
        <td>{{ $d->total_gaji }}</td>
        <td>{{ $d->total_kasbon }}</td>
        <td>{{ $d->sisa_gaji }}</td>
    </tr>
    @endforeach
</table>