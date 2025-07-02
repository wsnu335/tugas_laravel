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
        <h2 class="mb-4 text-center">✏️ Edit Data Mahasiswa</h2>

        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $mahasiswa->jurusan }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $mahasiswa->email }}" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">⬅️ Kembali</a>
                <button type="submit" class="btn btn-purple">💾 Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
