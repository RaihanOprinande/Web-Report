@extends('layouts.main')

@section('title', 'Daftar Task Projek')

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

        /* BADGE STYLE MENYERUPAI PROJEK */
        .badge.bg-warning {
            background-color: #ffecb3 !important;
            color: #ff9500 !important;
        }
        .badge.bg-danger {
            background-color: #ffc9bb !important;
            color: #fb3b1e !important;
        }
        .badge.bg-secondary {
            background-color: #ddd !important;
            color: #555 !important;
        }
        .badge.bg-success {
            background-color: #d4edda !important;
            color: #198754 !important;
        }
    </style>

    <div class="bungkus">

        {{-- HEADER --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Task Projek</h1>
            <a href="{{ route('projek_task.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Task
            </a>
        </div>

        {{-- TABLE CARD --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Task</h6>
            </div>

            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Projek</th>
                                <th>Task</th>
                                <th>Status</th>
                                <th>Handler</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($tasks as $task)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $task->projek->name_projek }}</td>
                                    <td>{{ $task->task }}</td>

                                    {{-- STATUS BADGE --}}
                                    <td>
                                        @if($task->status == 'belum dikerjakan')
                                            <span class="badge bg-secondary">{{ ucfirst($task->status) }}</span>

                                        @elseif($task->status == 'sedang dikerjakan')
                                            <span class="badge bg-warning text-dark">{{ ucfirst($task->status) }}</span>

                                        @elseif($task->status == 'selesai')
                                            <span class="badge bg-success">{{ ucfirst($task->status) }}</span>
                                        @endif
                                    </td>

                                    <td>{{ $task->user->name }}</td>

                                    {{-- ACTION --}}
                                    <td>
                                        {{-- <a href="/admin/projek_task/{{ $task->id }}" class="btn btn-detail btn-sm">
                                            <i class="bi bi-gear-wide-connected"></i>
                                        </a> --}}

                                        <a href="{{ route('projek_task.edit', $task->id) }}" class="btn btn-edit btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form action="{{ route('projek_task.destroy', $task->id) }}"
                                              method="POST" style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-hapus btn-sm"
                                                onclick="return confirm('Yakin hapus task ini?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Belum ada task</td>
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
