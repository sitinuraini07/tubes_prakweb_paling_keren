@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Guru</h2>

    <form action="{{ route('guru.store') }}" method="POST">
        @csrf

        Nama Guru:
        <input type="text" name="nama_guru" class="form-control mb-2">

        NIP:
        <input type="text" name="nip" class="form-control mb-2">

        Mata Pelajaran:
        <input type="text" name="mapel" class="form-control mb-2">

        No HP:
        <input type="text" name="no_hp" class="form-control mb-2">

        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection