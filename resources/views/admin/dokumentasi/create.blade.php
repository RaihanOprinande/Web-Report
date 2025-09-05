@extends('layouts.main')

@section('title', 'Tambah Dokumentasi')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Dokumentasi</h1>

    <form action="{{ route('dokumentasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Projek</label>
            <select name="projek_id" class="form-control" required>
                @foreach($projeks as $projek)
                    <option value="{{ $projek->id }}">{{ $projek->name_projek }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
