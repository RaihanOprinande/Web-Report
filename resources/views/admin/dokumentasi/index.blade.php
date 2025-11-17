@extends('layouts.main')

@section('title', 'Daftar Dokumentasi')

@section('content')
    <style>
        .btn-edit {
            color: #4e73df;
        }

        .btn-edit:hover {
            background-color: #ffc107;
            color: white;
        }

        .btn-hapus {
            color: #4e73df;
        }

        .btn-hapus:hover {
            background-color: #dc3545;
            color: white;
        }

        .img-preview {
            border-radius: 10px;
            transition: 0.2s;
        }

        .img-preview:hover {
            transform: scale(1.1);
            box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
        }
    </style>

    <div class="bungkus">

        {{-- HEADER --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Dokumentasi</h1>
            <a href="{{ route('dokumentasi.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Dokumentasi
            </a>
        </div>

        {{-- TABLE CARD --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Dokumentasi</h6>
            </div>

            <div class="card-body">

                {{-- ALERT SUCCESS --}}
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Projek</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dokumentasis as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->projek->name_projek }}</td>

                                    <td>
                                        <img src="{{ asset('storage/' . $d->gambar) }}" width="110" class="img-preview" alt="gambar">
                                    </td>

                                    <td>{{ $d->deskripsi }}</td>

                                    <td>
                                        {{-- EDIT --}}
                                        <a href="{{ route('dokumentasi.edit', $d->id) }}" class="btn btn-edit btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        {{-- DELETE --}}
                                        <form action="{{ route('dokumentasi.destroy', $d->id) }}"
                                              method="POST" style="display:inline-block">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-hapus btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                            @if ($dokumentasis->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center">Belum ada dokumentasi</td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endpush
