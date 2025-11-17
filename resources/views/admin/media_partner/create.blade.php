@extends('layouts.main')

@section('title', 'Tambah Media Partner')

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
        <h1 class="h3 mb-0 text-gray-800">Tambah Media Partner</h1>
        <a href="{{ route('media_partner.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    {{-- Card --}}
    <div class="card shadow mb-4">

        {{-- Card Header --}}
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Media Partner</h6>
        </div>

        {{-- Card Body --}}
        <div class="card-body">
            <form action="{{ route('media_partner.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    {{-- Nama --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Nama Media Partner</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    {{-- Logo --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Logo</label>
                        <input type="file" name="logo" class="form-control">
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-save"></i> Simpan Media Partner
                </button>

            </form>
        </div>

    </div>

</div>

@endsection
