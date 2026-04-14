<h1>Tambah Pekerjaan</h1>

<form action="/pekerjaan" method="POST">
    @csrf

    <input type="text" name="nama_pekerjaan" placeholder="Nama Pekerjaan"><br><br>
    <input type="number" name="upah_per_unit" placeholder="Upah"><br><br>

    <button type="submit">Simpan</button>
</form>