@extends('layouts.main')

@section('title', 'Detail Projek')

@section('content')

<style>
    .badge.bg-warning {
        background-color: #ffecb3 !important;
        color: #ff9500 !important;
    }

    .badge.bg-danger {
        background-color: #ffc9bb !important;
        color: #fb3b1e !important;
    }

    .badge.bg-secondary {
        background-color: #d6d6d6 !important;
        color: #4e4e4e !important;
    }

    .btn-back {
        color: #4e73df;
    }
</style>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Projek</h1>
        <a href="{{ route('projek.index') }}" class="btn btn-sm btn-light btn-back">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">

            {{-- Informasi Utama Projek --}}
            <h4 class="mb-3 font-weight-bold">{{ $projek->name_projek }}</h4>

            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>Kategori:</strong><br>
                    {{ $projek->kategori->nama_kategori ?? '-' }}
                </div>

                <div class="col-md-4">
                    <strong>Client:</strong><br>
                    {{ $projek->client ?? '-' }}
                </div>

                <div class="col-md-4">
                    <strong>Deadline:</strong><br>
                    {{ $projek->deadline }}
                </div>
            </div>

            <div class="row mb-4">

                <div class="col-md-4">
                    <strong>Prioritas:</strong><br>

                    @if ($projek->prioritas == 'tinggi')
                        <span class="badge bg-danger text-white">{{ ucfirst($projek->prioritas) }}</span>
                    @elseif($projek->prioritas == 'sedang')
                        <span class="badge bg-warning text-dark">{{ ucfirst($projek->prioritas) }}</span>
                    @else
                        <span class="badge bg-primary text-white">{{ ucfirst($projek->prioritas) }}</span>
                    @endif
                </div>

                <div class="col-md-4">
                    <strong>Status:</strong><br>

                    @if ($projek->status == 'akan datang')
                        <span class="badge bg-secondary">{{ ucfirst($projek->status) }}</span>
                    @elseif($projek->status == 'sedang berjalan')
                        <span class="badge bg-warning text-white">{{ ucfirst($projek->status) }}</span>
                    @elseif($projek->status == 'selesai')
                        <span class="badge bg-success text-white">{{ ucfirst($projek->status) }}</span>
                    @endif
                </div>

                <div class="col-md-4">
                    <strong>Tanggal Mulai:</strong><br>
                    {{ $projek->tanggal_mulai }}
                </div>
            </div>

            {{-- Thumbnail --}}
            <div class="mb-4">
                <strong>Thumbnail:</strong><br>
                @if ($projek->thumbnail)
                    <img src="{{ asset('storage/' . $projek->thumbnail) }}" width="300" class="img-thumbnail mt-2">
                @else
                    <p class="text-muted">Tidak ada thumbnail</p>
                @endif
            </div>

            {{-- Deskripsi --}}
            <div class="mb-4">
                <strong>Deskripsi Projek:</strong>
                <p>{{ $projek->deskripsi ?? '-' }}</p>
            </div>

            <hr>

            {{-- TASK PROJEK --}}
            <h5 class="font-weight-bold">Task Projek</h5>
            <table class="table table-bordered mt-2">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Handler</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projek->tasks as $task)
                        <tr>
                            <td>{{ $task->task }}</td>
                            <td>{{ $task->user->name ?? '-' }}</td>

                            <td>
                                @if($task->status == 'belum dikerjakan')
                                    <span class="badge bg-secondary">Belum dikerjakan</span>

                                @elseif($task->status == 'sedang dikerjakan')
                                    <span class="badge bg-warning text-white">Sedang dikerjakan</span>

                                @elseif($task->status == 'selesai')
                                    <span class="badge bg-success text-white">Selesai</span>

                                @else
                                    <span class="badge bg-secondary">{{ ucfirst($task->status) }}</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada task</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <hr>

            {{-- Dokumentasi --}}
            <h5 class="font-weight-bold">Dokumentasi</h5>

            <div class="row mt-3">
                @forelse($projek->dokumentasi as $dok)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ asset('storage/' . $dok->gambar) }}" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">{{ $dok->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted ml-3">Belum ada dokumentasi.</p>
                @endforelse
            </div>

        </div>
    </div>
</div>

@endsection
