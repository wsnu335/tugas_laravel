@extends('layouts.app')

@section('content')
    <h1>Detail Mahasiswa</h1>

    <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
    <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
    <p><strong>Jurusan:</strong> {{ $mahasiswa->jurusan }}</p>
    <p><strong>Email:</strong> {{ $mahasiswa->email }}</p>

    <p>
        <a href="{{ route('mahasiswa.index') }}">Kembali</a>
    </p>
@endsection