@extends('layouts.main')

@section('title', 'Tambah Kategori Projek')

@section('content')
<div class="container">
    <h2>Tambah Kategori Projek</h2>

    <form action="{{ route('projek_kategori.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('projek_kategori.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
