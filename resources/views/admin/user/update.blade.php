@extends('layouts.main')

@section('title', 'Edit Anggota')

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
        <h1 class="h3 mb-0 text-gray-800">Edit Anggota</h1>
        <a href="{{ route('user.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    {{-- CARD --}}
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Anggota</h6>
        </div>

        <div class="card-body">

            @if ($message = Session::get('error'))
                <div class="alert alert-danger">Oops! {{ $message }}</div>
            @endif

            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                    {{-- Nama --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Nama Anggota</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                    </div>

                    {{-- Email --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                    </div>

                    {{-- Role --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Peran</label>
                        <select name="role" class="form-control js-example-basic-single" required>
                            <option value="0" {{ $user->role == '0' ? 'selected' : '' }}>Developer</option>
                            <option value="1" {{ $user->role == '1' ? 'selected' : '' }}>Leader</option>
                        </select>
                    </div>

                    {{-- Foto --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Foto Profil</label>
                        <input type="file" name="photo" class="form-control">

                        @if(!empty($user->photo))
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$user->photo) }}" width="120" class="img-thumbnail">
                            </div>
                        @endif
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-save"></i> Update Anggota
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
