@extends('layouts.main')

@section('title', 'Daftar Kontak')

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
    </style>

    <div class="bungkus">

        {{-- HEADER --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Kontak</h1>

            <a href="{{ route('kontak.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kontak
            </a>
        </div>

        {{-- TABLE CARD --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Kontak</h6>
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
                                <th>Platform</th>
                                <th>Nama</th>
                                <th>Link</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($kontaks as $k)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $k->platform }}</td>
                                    <td>{{ $k->nama }}</td>

                                    <td>
                                        <a href="{{ $k->link }}" target="_blank">
                                            {{ $k->link }}
                                        </a>
                                    </td>

                                    <td>
                                        {{-- EDIT --}}
                                        <a href="{{ route('kontak.edit', $k->id) }}" class="btn btn-edit btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        {{-- DELETE --}}
                                        <form action="{{ route('kontak.destroy', $k->id) }}" method="POST" style="display:inline-block">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-hapus btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus kontak ini?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            @if ($kontaks->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center">Belum ada data kontak</td>
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
