@extends('layouts.main')

@section('title', 'Edit Kategori Projek')

@section('content')
<div class="container">
    <h2>Edit Kategori Projek</h2>

   <form action="{{ route('projek_kategori.update', $projek_kategori->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nama_kategori" class="form-label">Nama Kategori</label>
        <input type="text" name="nama_kategori" value="{{ $projek_kategori->nama_kategori }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea name="deskripsi" class="form-control">{{ $projek_kategori->deskripsi }}</textarea>
    </div>
    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar</label>
        <input type="file" name="gambar" class="form-control">
        @if($projek_kategori->gambar)
            <img src="{{ asset('storage/'.$projek_kategori->gambar) }}" alt="Gambar" class="mt-2" style="width:120px; height:auto;">
        @endif
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>

</div>
@endsection
