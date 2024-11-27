@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <!-- Page Heading -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h4 text-primary">Proses Normalisasi</h1>
            <form action="{{ route('normalization.process') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-sync"></i> Proses Normalisasi
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
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="normalization-table">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>Tes Tulis</th>
                                <th>Surah Pilihan</th>
                                <th>Menulis Pegon</th>
                                <th>Normalized Tes Tulis</th>
                                <th>Normalized Surah Pilihan</th>
                                <th>Normalized Menulis Pegon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($santris as $santri)
                                <tr>
                                    <td>{{ $santri->nama }}</td>
                                    <td>{{ $santri->tes_tulis }}</td>
                                    <td>{{ $santri->surah_pilihan }}</td>
                                    <td>{{ $santri->menulis_pegon }}</td>
                                    <td>{{ number_format($santri->normalized_tes_tulis, 2) }}</td>
                                    <td>{{ number_format($santri->normalized_surah_pilihan, 2) }}</td>
                                    <td>{{ number_format($santri->normalized_menulis_pegon, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-3">
            {{ $santris->links() }}
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Include jQuery and DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#normalization-table').DataTable({
                paging: false, // Disable DataTables pagination
                searching: false // Disable DataTables search
            });
        });
    </script>
@endpush
