@extends('layouts.main')

@section('title', 'Edit Projek')
@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Projek</h1>
        <a href="{{ route('projek.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('projek.update', $projek->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama Projek</label>
                    <input type="text" name="name_projek" class="form-control" value="{{ $projek->name_projek }}" required>
                </div>
                <div class="form-group">
                    <label>Kategori Projek</label>
                    <select name="projek_kategori_id" class="form-control">
                        <option value="">Pilih Kategori</option>
                        @foreach($kategoris as $kategori)
                            <option value="{{ $kategori->id }}" {{ $projek->projek_kategori_id == $kategori->id ? 'selected' : '' }}>{{ $kategori->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Client</label>
                    <input type="text" name="client" class="form-control" value="{{ $projek->client }}" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Mulai</label>
                    <input type="date" name="tanggal_mulai" class="form-control" value="{{ $projek->tanggal_mulai }}">
                </div>
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input type="date" name="tanggal_selesai" class="form-control" value="{{ $projek->tanggal_selesai }}">
                </div>
                <div class="form-group">
                    <label>Deadline</label>
                    <input type="date" name="deadline" class="form-control" value="{{ $projek->deadline }}">
                </div>
                <div class="form-group">
                    <label>Prioritas</label>
                    <select name="prioritas" class="form-control" required>
                        <option value="tinggi" {{ $projek->prioritas == 'tinggi' ? 'selected' : '' }}>Tinggi</option>
                        <option value="sedang" {{ $projek->prioritas == 'sedang' ? 'selected' : '' }}>Sedang</option>
                        <option value="rendah" {{ $projek->prioritas == 'rendah' ? 'selected' : '' }}>Rendah</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="akan datang" {{ $projek->status == 'akan datang' ? 'selected' : '' }}>Akan Datang</option>
                        <option value="sedang berjalan" {{ $projek->status == 'sedang berjalan' ? 'selected' : '' }}>Sedang Berjalan</option>
                        <option value="selesai" {{ $projek->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control">{{ $projek->deskripsi }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</div>
@endsection
