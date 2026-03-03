@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Guru</h2>

    <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">
        Tambah Guru
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Mapel</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gurus as $g)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $g->nama_guru }}</td>
                <td>{{ $g->nip }}</td>
                <td>{{ $g->mapel }}</td>
                <td>{{ $g->no_hp }}</td>
                <td>
                    <a href="{{ route('guru.show', $g->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('guru.edit', $g->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('guru.destroy', $g->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection