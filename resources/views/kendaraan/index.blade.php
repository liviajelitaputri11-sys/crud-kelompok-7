<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kendaraan</title>
</head>
<body>
    <h1>Data Kendaraan</h1>
    <p>
        <a href="{{route('kendaraan.create') }}">
            Tambah Kendaraan
</a>
@session('success')
<p style="coloe: pink;">
    {{ session('success')}}
</p>
@endsession

    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>Nomor Polisi</th>
            <th>Merek</th>
            <th>Tipe</th>
            <th>Kategori</th>
            <th>Tahun</th>
            <th>Warna</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>

        @foreach ($kendaraans as $kendaraan)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kendaraan->nomor_polisi }}</td>
            <td>{{ $kendaraan->merek }}</td>
            <td>{{ $kendaraan->tipe }}</td>
            <td>{{ $kendaraan->kategori }}</td>
            <td>{{ $kendaraan->tahun }}</td>
            <td>{{ $kendaraan->warna }}</td>
            <td>{{ $kendaraan->keterangan }}</td>
            <td>
                <a ...>
</a>
<a href="{{ route('kendaraan.edit', $kendaraan->id) }}">
    Edit
</a>
</td>
        </tr>
        @endforeach
    </table>
</body>
</html>