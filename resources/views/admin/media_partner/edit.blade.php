@extends('layouts.main')

@section('title', 'Edit Media Partner')

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
        <h1 class="h3 mb-0 text-gray-800">Edit Media Partner</h1>
        <a href="{{ route('media_partner.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    {{-- Card --}}
    <div class="card shadow mb-4">

        {{-- Card Header --}}
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Media Partner</h6>
        </div>

        <div class="card-body">

            <form action="{{ route('media_partner.update', $media_partner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                    {{-- Nama --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Nama Media Partner</label>
                        <input type="text" name="nama" class="form-control" value="{{ $media_partner->nama }}" required>
                    </div>

                    {{-- Logo --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Logo</label>
                        <input type="file" name="logo" class="form-control">

                        @if ($media_partner->logo)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$media_partner->logo) }}" width="150" class="img-thumbnail">
                            </div>
                        @endif
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-save"></i> Update Media Partner
                </button>

            </form>

        </div>
    </div>

</div>

@endsection
