@extends('layouts.main')

@section('title', 'Daftar Dokumentasi')

@section('content')
    <div class="bungkus">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Dokumentasi</h1>
            <a href="{{ route('dokumentasi.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Dokumentasi
            </a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Projek</h6>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table " id="dataTable" width="100%" cellspacing="0">
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
                                        <img src="{{ asset('storage/' . $d->gambar) }}" width="100" alt="gambar">
                                    </td>
                                    <td>{{ $d->deskripsi }}</td>
                                    <td>
                                        <a href="{{ route('dokumentasi.edit', $d->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('dokumentasi.destroy', $d->id) }}" method="POST"
                                            style="display:inline-block">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
