@extends('layouts.main')

@section('title', 'Daftar Media Partner')

@section('content')
<div class="container">
    <h2>Daftar Media Partner</h2>
    <a href="{{ route('media_partner.create') }}" class="btn btn-primary mb-3">+ Tambah Media Partner</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Logo</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mediaPartners as $mp)
            <tr>
                <td>{{ $mp->id }}</td>
                <td>{{ $mp->nama }}</td>
                <td>
                    @if($mp->logo)
                        <img src="{{ asset('storage/'.$mp->logo) }}" width="100">
                    @else
                        <span class="text-muted">Belum ada logo</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('media_partner.edit', $mp->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('media_partner.destroy', $mp->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus media partner ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada media partner</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
