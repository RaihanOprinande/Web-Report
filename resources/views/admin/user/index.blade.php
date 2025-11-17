@extends('layouts.main')

@section('title', 'Daftar Anggota')

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

        .btn-detail {
            color: #4e73df;
            font-size: 17px;
        }

        .btn-detail:hover {
            background-color: #4e73df;
            color: white;
        }

        .badge.bg-warning {
            background-color: #ffecb3 !important;
            color: #ff9500 !important;
        }

        .badge.bg-danger {
            background-color: #ffc9bb !important;
            color: #fb3b1e !important;
        }
    </style>

    <div class="bungkus">

        {{-- HEADER --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Anggota</h1>
            <a href="/admin/anggota/create" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Anggota
            </a>
        </div>

        <div class="card shadow mb-4">

            {{-- TABLE --}}
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Peran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->role == 1)
                                            <span class="badge bg-success text-white">Pimpinan</span>
                                        @else
                                            <span class="badge bg-secondary text-white">Developer</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/admin/anggota/{{ $user->id }}" class="btn btn-detail btn-sm">
                                            <i class="bi bi-gear-wide-connected"></i>
                                        </a>
                                        <a href="/admin/anggota/{{ $user->id }}/edit" class="btn btn-edit btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form action="/admin/anggota/{{ $user->id }}" method="POST"
                                              style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-hapus"
                                                onclick="return confirm('Yakin ingin menghapus?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>


                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Belum ada data anggota</td>
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
