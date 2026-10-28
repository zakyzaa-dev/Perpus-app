<?php

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Petugas;

new class extends Component {
    use WithPagination;

    // Mengubah tema pagination ke Bootstrap
    public $paginationTheme = 'bootstrap';

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        // Eksekusi query pencarian berdasarkan input user
        $daftarPetugas = Petugas::query()
            ->when($this->search, function ($query){
                $query->where('nama_petugas', 'like', '%' . $this->search . '%')
                    ->orWhere('username', 'like', '%' . $this->search . '%')
                    ->orWhere('jabatan', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->paginate(10);

        return $this->view([
            'petugass' => $daftarPetugas,
        ]);
    }
};
?>

<div>
    <!-- 1. Input Form Pencarian -->
    <div class="mb-4">
        <input type="text" wire:model.live.debounce.300ms="search"
            placeholder="Cari petugas berdasarkan nama, username, atau jabatan..." class="form-control">
    </div>

    <!-- 2. Tabel Data Petugas -->
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
                            <a href="{{ route('petugas.edit', $item->id_petugas) }}" class="btn-warning btn mr-2">Edit</a>

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

    <!-- 3. Link Navigasi Halaman Pagination -->
    <div class="mt-3">
        {{ $petugass->links() }}
    </div>
</div>
