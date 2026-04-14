<h1>Tambah Hasil Kerja</h1>

<form action="/hasil" method="POST">
    @csrf

    <select name="karyawan_id">
        @foreach($karyawans as $k)
            <option value="{{ $k->id }}">{{ $k->nama }}</option>
        @endforeach
    </select><br><br>

    <select name="pekerjaan_id">
        @foreach($pekerjaans as $p)
            <option value="{{ $p->id }}">{{ $p->nama_pekerjaan }}</option>
        @endforeach
    </select><br><br>

    <input type="number" name="jumlah" placeholder="Jumlah"><br><br>
    <input type="date" name="tanggal"><br><br>

    <button type="submit">Simpan</button>
</form>