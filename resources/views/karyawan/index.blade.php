<h1>Data Karyawan</h1>

<a href="/karyawan/create">Tambah</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Aksi</th>
    </tr>

    @foreach($karyawans as $k)
    <tr>
        <td>{{ $k->nama }}</td>
        <td>{{ $k->jabatan }}</td>
        <td>
            <a href="/karyawan/{{ $k->id }}/edit">Edit</a>

            <form action="/karyawan/{{ $k->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>

            <a href="/gaji/generate/{{ $k->id }}">Hitung Gaji</a>
        </td>
    </tr>
    @endforeach
</table>

