@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="h4 text-primary">Hasil Normalisasi Min-Max</h1>
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Tes Tulis (Ternormalisasi)</th>
                        <th>Surah Pilihan (Ternormalisasi)</th>
                        <th>Menulis Pegon (Ternormalisasi)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($santris as $index => $santri)
                        <tr>
                            <td>{{ $santri->nama }}</td>
                            <td>{{ $normalizedTesTulis[$index] }}</td>
                            <td>{{ $normalizedSurahPilihan[$index] }}</td>
                            <td>{{ $normalizedMenulisPegon[$index] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('normalization.index') }}" class="btn btn-primary mt-4">Kembali</a>
    </div>
@endsection
