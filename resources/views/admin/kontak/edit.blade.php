@extends('layouts.main')

@section('title', 'Edit Kontak')

@section('content')

<style>
    .btn-kembali {
        color: #4e73df;
    }
    .btn-kembali:hover {
        background-color: #4e73df;
        color: white;
    }
</style>

<div class="bungkus">

    {{-- Header --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Kontak</h1>
        <a href="{{ route('kontak.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-4">

        {{-- Card Header --}}
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Kontak</h6>
        </div>

        {{-- Card Body --}}
        <div class="card-body">

            <form action="{{ route('kontak.update', $kontak->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">

                    {{-- Platform --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Platform</label>
                        <input type="text" name="platform" class="form-control"
                               value="{{ $kontak->platform }}" required>
                    </div>

                    {{-- Nama --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Nama</label>
                        <input type="text" name="nama" class="form-control"
                               value="{{ $kontak->nama }}" required>
                    </div>

                    {{-- Link --}}
                    <div class="col-md-12 mb-3">
                        <label class="font-weight-bold">Link</label>
                        <textarea name="link" class="form-control" rows="3" required>{{ $kontak->link }}</textarea>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-save"></i> Update Kontak
                </button>

            </form>

        </div>
    </div>

</div>

@endsection
