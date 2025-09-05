@extends('layouts.main')

@section('title', 'Edit Dokumentasi')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Dokumentasi</h1>

    <form action="{{ route('dokumentasi.update', $dokumentasi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Projek</label>
            <select name="projek_id" class="form-control" required>
                @foreach($projeks as $projek)
                    <option value="{{ $projek->id }}"
                        {{ $dokumentasi->projek_id == $projek->id ? 'selected' : '' }}>
                        {{ $projek->name_projek }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Gambar</label><br>
            <img src="{{ asset('storage/' . $dokumentasi->gambar) }}" width="120" class="mb-2">
            <input type="file" name="gambar" class="form-control">
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ $dokumentasi->deskripsi }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
