@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="h4 text-primary">Edit Santri</h1>

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('santris.update', $santri->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $santri->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $santri->tempat_lahir }}" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $santri->tanggal_lahir->format('Y-m-d') }}" required>
            </div>
            <div class="mb-3">
                <label for="tes_tulis" class="form-label">Tes Tulis</label>
                <input type="number" class="form-control" id="tes_tulis" name="tes_tulis" value="{{ $santri->tes_tulis }}" required min="0" max="100">
            </div>
            <div class="mb-3">
                <label for="surah_pilihan" class="form-label">Surah Pilihan</label>
                <input type="number" class="form-control" id="surah_pilihan" name="surah_pilihan" value="{{ $santri->surah_pilihan }}" required min="0" max="100">
            </div>
            <div class="mb-3">
                <label for="menulis_pegon" class="form-label">Menulis Pegon</label>
                <input type="number" class="form-control" id="menulis_pegon" name="menulis_pegon" value="{{ $santri->menulis_pegon }}" required min="0" max="100">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
