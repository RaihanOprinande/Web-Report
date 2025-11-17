@extends('layouts.main')

@section('title', 'Tambah Anggota')

@section('content')

<style>
    .btn-kembali {
        color: #4e73df;
    }

    .btn-kembali:hover {
        background-color: #4e73df;
        color: white;
    }

    .select2-container .select2-selection--single {
        width: 100% !important;
        height: 40px !important;
        display: flex !important;
        align-items: center !important;
        border-color: #d1d3e2 !important;
        margin-bottom: 15px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 38px !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 38px !important;
    }
</style>

<div class="bungkus">

    {{-- HEADER --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Anggota</h1>
        <a href="{{ route('user.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    {{-- CARD --}}
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Anggota</h6>
        </div>

        <div class="card-body">

            @if ($message = Session::get('error'))
                <div class="alert alert-danger">Oops! {{ $message }}</div>
            @endif

            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    {{-- Nama --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Nama Anggota</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    {{-- Email --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    {{-- Password --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    {{-- Repeat Password --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Ulangi Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>

                    {{-- Role --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Peran</label>
                        <select name="role" class="form-control js-example-basic-single" required>
                            <option value="0">Developer</option>
                            <option value="1">Leader</option>
                        </select>
                    </div>

                    {{-- Foto --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Foto Profil</label>
                        <input type="file" name="photo" class="form-control">
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-save"></i> Simpan Anggota
                </button>

            </form>

        </div>
    </div>

</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
@endpush
