@extends('layouts.main')

@section('title', 'Tambah Projek')

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
        <h1 class="h3 mb-0 text-gray-800">Tambah Projek</h1>
        <a href="{{ route('projek.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Projek</h6>
        </div>

        <div class="card-body">

            <form action="{{ route('projek.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    {{-- Nama Projek --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Nama Projek</label>
                        <input type="text" name="name_projek" class="form-control" required>
                    </div>

                    {{-- Kategori Projek --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Kategori Projek</label>
                        <select name="projek_kategori_id" class="form-control">
                            <option value="">Pilih Kategori</option>
                            @foreach($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Client --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Client</label>
                        <input type="text" name="client" class="form-control" required>
                    </div>

                    {{-- Thumbnail --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control">
                    </div>

                    {{-- Tanggal Mulai --}}
                    <div class="col-md-4 mb-3">
                        <label class="font-weight-bold">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai" class="form-control">
                    </div>

                    {{-- Tanggal Selesai --}}
                    <div class="col-md-4 mb-3">
                        <label class="font-weight-bold">Tanggal Selesai</label>
                        <input type="date" name="tanggal_selesai" class="form-control">
                    </div>

                    {{-- Deadline --}}
                    <div class="col-md-4 mb-3">
                        <label class="font-weight-bold">Deadline</label>
                        <input type="date" name="deadline" class="form-control">
                    </div>

                    {{-- Prioritas --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Prioritas</label>
                        <select name="prioritas" class="form-control" required>
                            <option value="">Pilih Prioritas</option>
                            <option value="tinggi">Tinggi</option>
                            <option value="sedang">Sedang</option>
                            <option value="rendah">Rendah</option>
                        </select>
                    </div>

                    {{-- Status --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Status</label>
                        <select name="status" class="form-control" required>
                            <option value="">Pilih Status</option>
                            <option value="akan datang">Akan Datang</option>
                            <option value="sedang berjalan">Sedang Berjalan</option>
                            <option value="selesai">Selesai</option>
                        </select>
                    </div>

                    {{-- Deskripsi --}}
                    <div class="col-md-12 mb-3">
                        <label class="font-weight-bold">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="4"></textarea>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-save"></i> Simpan Projek
                </button>

            </form>

        </div>
    </div>

</div>

@endsection
