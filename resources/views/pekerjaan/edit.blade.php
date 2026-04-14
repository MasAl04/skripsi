<h1>Edit Pekerjaan</h1>

<form action="/pekerjaan/{{ $pekerjaan->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama_pekerjaan" value="{{ $pekerjaan->nama_pekerjaan }}"><br><br>
    <input type="number" name="upah_per_unit" value="{{ $pekerjaan->upah_per_unit }}"><br><br>

    <button type="submit">Update</button>
</form>