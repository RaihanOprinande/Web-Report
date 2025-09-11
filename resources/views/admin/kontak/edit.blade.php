@extends('layouts.main')

@section('title', 'Edit Kontak')

@section('content')
<div class="container">
    <h2>Edit Kontak</h2>

    <form action="{{ route('kontak.update', $kontak->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Platform</label>
            <input type="text" name="platform" class="form-control" value="{{ $kontak->platform }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $kontak->nama }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Link</label>
            <textarea name="link" class="form-control" required>{{ $kontak->link }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('kontak.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
