@extends('layouts.main')

@section('title', 'Tambah Media Partner')

@section('content')
<div class="container">
    <h2>Tambah Media Partner</h2>

    <form action="{{ route('media_partner.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Logo</label>
            <input type="file" name="logo" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('media_partner.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
