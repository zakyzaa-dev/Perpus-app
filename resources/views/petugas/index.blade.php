<x-layouts.app title="testing dashboard">
    <h3 class="mt-3 text-dark">Daftar petugas</h3>
    <p class="opacity-75 small">Daftar petugas pada perpustakaan widya baca</p>
    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($petugass as $item)
                <tr>
                    <td>{{ $item->id_petugas }}</td>
                    <td>{{ $item->nama_petugas }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->jabatan }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-muted text-center">Belum ada data petugas!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</x-layouts.app>
