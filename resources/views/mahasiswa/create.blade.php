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
    .card {
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container mt-5">
    <div class="card p-4">
        <h2 class="mb-4 text-center text-purple">📝 Tambah Data Mahasiswa</h2>

        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="nim" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" id="jurusan" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">⬅️ Kembali</a>
                <button type="submit" class="btn btn-purple">💾 Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
