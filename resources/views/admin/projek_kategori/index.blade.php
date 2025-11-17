@extends('layouts.main')

@section('title', 'Daftar Kategori Projek')

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
            <h1 class="h3 mb-0 text-gray-800">Daftar Kategori Projek</h1>

            <a href="{{ route('projek_kategori.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kategori
            </a>
        </div>

        {{-- CARD --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Kategori Projek</h6>
            </div>

            <div class="card-body">

                {{-- ALERT SUCCESS --}}
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($kategoris as $kategori)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kategori->nama_kategori }}</td>
                                    <td>{{ $kategori->deskripsi }}</td>

                                    {{-- ACTION BUTTONS --}}
                                    <td>
                                        <a href="{{ route('projek_kategori.edit', $kategori->id) }}"
                                           class="btn btn-edit btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form action="{{ route('projek_kategori.destroy', $kategori->id) }}"
                                              method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-hapus btn-sm"
                                                    onclick="return confirm('Yakin hapus kategori ini?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Belum ada kategori projek</td>
                                </tr>
                            @endforelse
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
