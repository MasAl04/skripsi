<h1>Tambah Karyawan</h1>

<form action="/karyawan" method="POST">
    @csrf

    <input type="text" name="nama" placeholder="Nama"><br><br>
    <input type="text" name="jabatan" placeholder="Jabatan"><br><br>

    <button type="submit">Simpan</button>
</form>