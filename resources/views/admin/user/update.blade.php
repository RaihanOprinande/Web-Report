@extends('layouts.main')
@section('content')
    <style>
        .select2-container .select2-selection--single {
            width: 100% !important;
            height: 40px !important;
            display: flex;
            align-items: center;
            border-color: #d1d3e2;
            /* garis hitam */
            /* border-width: 1px !important; */
            /* border-style: solid !important; */
            margin-bottom: 15px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 44px !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 44px !important;
        }

        select.form-control option[value=""] {
            color: #d1d3e2;
        }
    </style>
    <div class="container-fluid">
        @if ($message = Session::get('error'))
            <div class="alert alert-danger" role="alert">
                Oops! {{ $message }}
            </div>
        @endif
        {{-- HEADER --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Anggota</h1>
            <a href="/admin/anggota" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
        {{-- END HEADER --}}
        {{-- MAIN --}}
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="/admin/anggota/{{ $user->id }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="forms">

                        <div class="form-group">
                            <label>Nama Anggota</label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Peran</label>
                            <select name="role" class="form-control select2 js-example-basic-single" required>
                                <option value="0" {{ $user->role == '0' ? 'selected' : '' }}>Developer</option>
                                <option value="1" {{ $user->role == '1' ? 'selected' : '' }}>Pimpinan</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    {{-- END MAIN --}}
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endpush
