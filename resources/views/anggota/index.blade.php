<x-layouts.app title="Anggota">
    <h3 class="mt-3 text-dark mb-1">Daftar Anggota</h3>
    <p class="text-muted small">Kelola data anggota perpustakaan Widya Aksara</p>

    @if (session('success'))
        <div class="alert alert-success">
            <b>{{ session('success') }}</b>
        </div>
    @endif

    <div class="card">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data anggota</h6>
            <a href="{{ route('anggota.create') }}" class="btn-primary btn btn-sm">
                <i class="fas fa-plus fa-sm"></i> Tambah Anggota
            </a>
        </div>
        <div class="card-body">
            <livewire:anggota-search />
        </div>
    </div>
</x-layouts.app>
