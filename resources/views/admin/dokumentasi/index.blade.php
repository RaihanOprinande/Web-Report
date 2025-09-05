@extends('layouts.main')

@section('title', 'Daftar Dokumentasi')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Daftar Dokumentasi</h1>
    <a href="{{ route('dokumentasi.create') }}" class="btn btn-primary mb-3">Tambah Dokumentasi</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Projek</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dokumentasis as $d)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->projek->name_projek }}</td>
                <td>
                    <img src="{{ asset('storage/' . $d->gambar) }}" width="100" alt="gambar">
                </td>
                <td>{{ $d->deskripsi }}</td>
                <td>
                    <a href="{{ route('dokumentasi.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('dokumentasi.destroy', $d->id) }}" method="POST" style="display:inline-block">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
