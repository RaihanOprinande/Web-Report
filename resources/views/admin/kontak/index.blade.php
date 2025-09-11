@extends('layouts.main')

@section('title', 'Daftar Kontak')

@section('content')
<div class="container">
    <h2>Daftar Kontak</h2>
    <a href="{{ route('kontak.create') }}" class="btn btn-primary mb-3">+ Tambah Kontak</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Platform</th>
                <th>Nama</th>
                <th>Link</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($kontaks as $kontak)
            <tr>
                <td>{{ $kontak->id }}</td>
                <td>{{ $kontak->platform }}</td>
                <td>{{ $kontak->nama }}</td>
                <td><a href="{{ $kontak->link }}" target="_blank">{{ $kontak->link }}</a></td>
                <td>
                    <a href="{{ route('kontak.edit', $kontak->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kontak.destroy', $kontak->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus kontak ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada data kontak</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
