@extends('layouts.main')

@section('title', 'Detail Anggota')

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
    .label-title {
        font-weight: 600;
        color: #4e73df;
    }
</style>

<div class="bungkus">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 text-gray-800">Detail Anggota</h1>
        <a href="{{ url('/admin/anggota') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Anggota</h6>
        </div>

        <div class="card-body">

            <div class="row">
                <!-- FOTO USER -->
                <div class="col-md-3 text-center">
                    @if ($user->photo)
                        <img src="{{ asset('storage/'.$user->photo) }}"
                             class="img-thumbnail mb-3 rounded"
                             width="180">
                    @else
                        <img src="https://ui-avatars.com/api/?name={{ $user->name }}&background=4e73df&color=fff"
                             class="img-thumbnail mb-3 rounded"
                             width="180">
                    @endif
                </div>

                <!-- DATA USER -->
                <div class="col-md-9">
                    <table class="table">
                        <tr>
                            <th class="label-title" width="200">Nama</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th class="label-title">Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th class="label-title">Role</th>
                            <td>
                                        @if ($user->role == 1)
                                            <span class="badge bg-success text-white">Pimpinan</span>
                                        @else
                                            <span class="badge bg-secondary text-white">Developer</span>
                                        @endif
                                    </td>
                        </tr>
                        <tr>
                            <th class="label-title">Posisi</th>
                            <td>{{ $user->posisi ?? '-' }}</td>
                        </tr>
                    </table>

                    <!-- Aksi -->
                    <div class="mt-3">
                        <a href="{{ route('anggota.edit', $user->id) }}"
                           class="btn btn-edit btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('anggota.destroy', $user->id) }}"
                              method="POST"
                              style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-hapus btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus?')">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
