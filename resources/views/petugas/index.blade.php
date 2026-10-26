<x-layouts.app title="Petugas">
    <h3 class="mt-3 text-dark mb-1">Daftar Petugas</h3>
    <p class="text-muted small">Kelola data akun petugas Perpustakaan Widya Aksara.</p>

    @if (session('success'))
        <div class="alert alert-success">
            <b>{{ session('success') }}</b>
        </div>
    @endif
    <div class="card">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
            <a href="{{ route('petugas.create') }}" class="btn-primary btn btn-sm">
                <i class="fas fa-plus fa-sm"></i> Tambah Petugas
            </a>
        </div>
        <div class="card-body">
            @livewire('petugas-search')
        </div>
    </div>

</x-layouts.app>
