@extends('layouts.main')

@section('title', 'Tambah Kategori Projek')

@section('content')
<div class="container">
    <h2>Tambah Kategori Projek</h2>

    <form action="{{ route('projek_kategori.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nama_kategori" class="form-label">Nama Kategori</label>
        <input type="text" name="nama_kategori" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>
@endsection
