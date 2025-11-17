@extends('layouts.main')

@section('title', 'Edit Dokumentasi')

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

    {{-- HEADER --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Dokumentasi</h1>
        <a href="{{ route('dokumentasi.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    {{-- CARD --}}
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Dokumentasi</h6>
        </div>

        <div class="card-body">

            {{-- ERROR --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- FORM --}}
            <form action="{{ route('dokumentasi.update', $dokumentasi->id) }}"
                  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                    {{-- PROJEK --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Projek</label>
                        <select name="projek_id" class="form-control" required>
                            @foreach($projeks as $projek)
                                <option value="{{ $projek->id }}"
                                    {{ $dokumentasi->projek_id == $projek->id ? 'selected' : '' }}>
                                    {{ $projek->name_projek }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- GAMBAR --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Gambar</label>
                        <input type="file" name="gambar" class="form-control">

                        @if($dokumentasi->gambar)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $dokumentasi->gambar) }}"
                                     class="img-thumbnail"
                                     style="width:120px;">
                            </div>
                        @endif
                    </div>

                    {{-- DESKRIPSI --}}
                    <div class="col-md-12 mb-3">
                        <label class="font-weight-bold">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="4" required>{{ $dokumentasi->deskripsi }}</textarea>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-save"></i> Perbarui Dokumentasi
                </button>

            </form>

        </div>
    </div>

</div>

@endsection
