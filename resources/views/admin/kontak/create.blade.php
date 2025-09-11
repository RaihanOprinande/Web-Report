@extends('layouts.main')

@section('title', 'Tambah Kontak')

@section('content')
<div class="container">
    <h2>Tambah Kontak</h2>

    <form action="{{ route('kontak.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Platform</label>
            <input type="text" name="platform" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Link</label>
            <textarea name="link" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('kontak.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
