@extends('layouts.main')

@section('content')
    <style>
        .btn-edit:hover {
            background-color: white !important;
            /* kuning */
            color: #ffc107 !important;
            border-color: #ffc107 !important;
        }

        .btn-delete:hover {
            background-color: white !important;
            /* merah */
            color: #dc3545 !important;
            border-color: #dc3545 !important;
        }
    </style>
    <div class="wrapper">
        <div class="alert mx-auto" id="alert-box mb-2">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    Sukses {{ $message }}
                </div>
            @endif
        </div>
        {{-- HEADER --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Anggota</h1>
            <a href="/admin/anggota/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Anggota</a>
        </div>
        {{-- END HEADER --}}
        <div class="card shadow mb-4">
            {{-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div> --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Peran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="">{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->role == 1)
                                            Pimpinan
                                        @else
                                            Developer
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/admin/anggota/{{ $user->id }}/edit"
                                            class="btn btn-edit btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="/admin/anggota/{{ $user->id }}" method="POST"
                                            style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-delete btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
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
