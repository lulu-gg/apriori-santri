@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <!-- Page Heading -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h4 text-primary">Data Santri</h1>
            <a href="{{ route('santris.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Santri
            </a>
        </div>

        <!-- Success Message -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Search Bar -->
        <div class="mb-4">
            <form action="{{ route('santris.index') }}" method="GET" class="d-flex">
                <input 
                    type="text" 
                    name="search" 
                    class="form-control me-2 border-0 rounded-pill shadow-sm" 
                    placeholder="Cari Santri..." 
                    value="{{ request('search') }}"
                >
                <button type="submit" class="btn btn-outline-primary rounded-pill">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>

        <!-- Data Table -->
        <div class="card border-light shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="santri-table">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($santris as $santri)
                                <tr>
                                    <td>{{ $santri->nama }}</td>
                                    <td>{{ $santri->tempat_lahir }}</td>
                                    <td>{{ $santri->tanggal_lahir->format('d M Y') }}</td>
                                    <td>
                                        <a 
                                            href="{{ route('santris.edit', $santri->id) }}" 
                                            class="btn btn-warning btn-sm"
                                        >
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form 
                                            action="{{ route('santris.destroy', $santri->id) }}" 
                                            method="POST" 
                                            style="display:inline;"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
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

    @push('scripts')
        <!-- Include jQuery and DataTables -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#santri-table').DataTable({
                    paging: false, // Disable pagination from DataTables
                    searching: false // Disable search from DataTables
                });
            });
        </script>
    @endpush
@endsection
