<h1>Edit Karyawan</h1>

<form action="/karyawan/{{ $karyawan->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama" value="{{ $karyawan->nama }}"><br><br>
    <input type="text" name="jabatan" value="{{ $karyawan->jabatan }}"><br><br>

    <button type="submit">Update</button>
</form>