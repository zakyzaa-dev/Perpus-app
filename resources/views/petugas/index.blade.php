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
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($petugass as $item)
                        <tr>
                            <td>{{ $item->id_petugas }}</td>
                            <td>{{ $item->nama_petugas }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->jabatan }}</td>
                            <td>
                                <div class="d-flex">
                                    {{-- EDIT BUTTON --}}
                                    <a href="{{ route('petugas.edit', $item->id_petugas) }}"
                                        class="btn-warning btn mr-2">Edit</a>

                                    {{-- DELETE BUTTON --}}
                                    <form action="{{ route('petugas.destroy', $item->id_petugas) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-danger btn mr-2"
                                            onclick="return confirm('Yakin ingin menghapus petugas {{ $item->nama_petugas }}?')">Delete</button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-muted text-center">Belum ada data petugas!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-4">
                {{ $petugass->links() }}
            </div>
        </div>
    </div>

</x-layouts.app>
