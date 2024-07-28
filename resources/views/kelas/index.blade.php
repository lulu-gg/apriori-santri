@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <!-- Page Heading -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h4 text-primary">Kelompok Kelas Santri</h1>
            <form action="{{ route('kelas.process') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-cogs"></i> Proses Kelas
                </button>
            </form>
        </div>

        <!-- Success Message -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Data Table -->
        <div class="card border-light shadow-sm">
            <div class="card-body p-0">
                <!-- Responsive Table -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="kelas-table">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($santris as $santri)
                                <tr>
                                    <td>{{ $santri->nama }}</td>
                                    <td>{{ $santri->tempat_lahir }}</td>
                                    <td>{{ \Carbon\Carbon::parse($santri->tanggal_lahir)->format('d M Y') }}</td>
                                    <td>{{ $santri->kelas }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @push('scripts')
            <!-- Include jQuery before DataTables -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#kelas-table').DataTable({
                        // Optional: You can configure DataTables here if needed
                    });
                });
            </script>
        @endpush
        </div>
    </div>
@endsection
