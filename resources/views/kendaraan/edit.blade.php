<h1>Edit Kendaraan</h1>

<form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>
        <label>Nomor Polisi:</label>
        <input type="text" name="nomor_polisi"
            value="{{ $kendaraan->nomor_polisi }}">
    </p>

    <p>
        <label>Merek:</label>
        <input type="text" name="merek"
            value="{{ $kendaraan->merek }}">
    </p>

    <p>
        <label>Tipe:</label>
        <input type="text" name="tipe"
            value="{{ $kendaraan->tipe }}">
    </p>

    <p>
        <label>Kategori:</label>
        <input type="text" name="kategori"
            value="{{ $kendaraan->kategori }}">
    </p>

    <p>
        <label>Tahun:</label>
        <input type="number" name="tahun"
            value="{{ $kendaraan->tahun }}">
    </p>

    <p>
        <label>Warna:</label>
        <input type="text" name="warna"
            value="{{ $kendaraan->warna }}">
    </p>

    <button type="submit">Simpan</button>
</form>

<p>
    <a href="{{ route('kendaraan.index') }}">
        Kembali ke Kendaraan
    </a>
</p>