@extends('layouts.main')

@section('title', 'Edit Media Partner')

@section('content')
<div class="container">
    <h2>Edit Media Partner</h2>

    <form action="{{ route('media_partner.update', $media_partner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $media_partner->nama }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Logo</label><br>
            @if($media_partner->logo)
                <img src="{{ asset('storage/'.$media_partner->logo) }}" width="120" class="mb-2">
            @endif
            <input type="file" name="logo" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('media_partner.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
