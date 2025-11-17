@extends('layouts.main')

@section('title', 'Tambah Kategori Projek')

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

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Kategori Projek</h1>
        <a href="{{ route('projek_kategori.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Kategori Projek</h6>
        </div>

        <div class="card-body">

            <form action="{{ route('projek_kategori.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    {{-- Nama Kategori --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control" required>
                    </div>

                    {{-- Gambar --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>

                    {{-- Deskripsi --}}
                    <div class="col-md-12 mb-3">
                        <label class="font-weight-bold">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="4"></textarea>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-save"></i> Simpan Kategori
                </button>

            </form>

        </div>
    </div>

</div>

@endsection
