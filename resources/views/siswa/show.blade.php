<!DOCTYPE html>
<html>
<head>
    <title>Detail Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2>Detail Siswa</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nama:</strong> {{ $siswa->nama_siswa }}</p>
            <p><strong>Kelas:</strong> {{ $siswa->kelas }}</p>
            <p><strong>NIS:</strong> {{ $siswa->nis }}</p>
        </div>
    </div>

    <a href="{{ route('siswa.index') }}" class="btn btn-secondary mt-3">Kembali</a>

</body>
</html>