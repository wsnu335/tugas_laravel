@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f8f4fb;
    }
    .btn-purple {
        background-color: #6f42c1;
        color: white;
    }
    .btn-purple:hover {
        background-color: #59359c;
        color: white;
    }
    .table-purple thead {
        background-color: #6f42c1;
        color: white;
    }
    .card {
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container mt-5">
    <div class="card p-4">
        <h1 class="mb-4 text-center text-purple">📘 Data Mahasiswa</h1>

        <div class="text-end mb-3">
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-purple">➕ Tambah Mahasiswa</a>
        </div>

        <table class="table table-bordered table-hover table-striped table-purple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mhs)
                <tr>
                    <td>{{ $mhs->id }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-sm btn-warning">✏️ Edit</a>

                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">🗑️ Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
