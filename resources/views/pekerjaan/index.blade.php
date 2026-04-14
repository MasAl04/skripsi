<h1>Data Pekerjaan</h1>

<a href="/pekerjaan/create">Tambah</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>Nama Pekerjaan</th>
        <th>Upah</th>
        <th>Aksi</th>
    </tr>

    @foreach($pekerjaans as $p)
    <tr>
        <td>{{ $p->nama_pekerjaan }}</td>
        <td>{{ $p->upah_per_unit }}</td>
        <td>
            <a href="/pekerjaan/{{ $p->id }}/edit">Edit</a>

            <form action="/pekerjaan/{{ $p->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>