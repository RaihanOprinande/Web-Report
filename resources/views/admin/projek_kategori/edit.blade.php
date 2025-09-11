@extends('layouts.main')

@section('title', 'Edit Kategori Projek')

@section('content')
<div class="container">
    <h2>Edit Kategori Projek</h2>

    <form action="{{ route('projek_kategori.update', $projek_kategori->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" value="{{ $projek_kategori->nama_kategori }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $projek_kategori->deskripsi }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('projek_kategori.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
