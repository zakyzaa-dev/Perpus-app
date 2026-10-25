<x-layouts.app title="Buku">
    <h3 class="mt-3 text-dark mb-1">Daftar Buku</h3>
    <p class="text-muted small">Kelola data buku Perpustakaan Widya Aksara.</p>

    @if (session('success'))
        <div class="alert alert-success">
            <b>{{ session('success') }}</b>
        </div>
    @endif
    <div class="card">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
            <a href="{{ route('buku.create') }}" class="btn-primary btn btn-sm">
                <i class="fas fa-plus fa-sm"></i> Tambah Buku
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bukus as $item)
                        <tr>
                            <td>{{ $item->id_buku }}</td>
                            <td>{{ $item->kode_buku }}</td>
                            <td>{{ $item->judul_buku }}</td>
                            <td>{{ $item->penulis }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>
                                <div class="d-flex">
                                    {{-- EDIT BUTTON --}}
                                    <a href="{{ route('buku.edit', $item->id_buku) }}"
                                        class="btn-warning btn mr-2">Edit</a>

                                    {{-- DELETE BUTTON --}}
                                    <form action="{{ route('buku.destroy', $item->id_buku) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-danger btn mr-2" onclick="return confirm('Yakin ingin menghapus petugas {{ $item->nama_petugas }}?')">Delete</button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-muted text-center">Belum ada data buku!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-4">
                {{ $bukus->links() }}
            </div>
        </div>
    </div>

</x-layouts.app>
