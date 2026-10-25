<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kendaraan</title>
</head>
<body>
    <h1>Tambah Data Kendaraan</h1>

    <form action="{{ route('kendaraan.store') }}" method="POST">
        @csrf

        <label>Nomor Polisi:</label><br>
        <input type="text" name="nomor_polisi" required><br><br>
        <label>Merek:</label><br>
        <input type="text" name="merek" required><br><br>
        <label>Tipe:</label><br>
        <input type="text" name="tipe" required><br><br>
        <label>Kategori:</label><br>
        <input type="text" name="kategori" required><br><br>
        <label>Tahun:</label><br>
        <input type="number" name="tahun" required><br><br>
        <label>Warna:</label><br>
        <input type="text" name="warna" required><br><br>
        <label>Keterangan:</label><br>
        <textarea name="keterangan"></textarea><br><br>
        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('kendaraan.index') }}">Kembali</a>
</body>
</html>