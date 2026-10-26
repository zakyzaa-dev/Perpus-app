<?php

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Buku;

new class extends Component {
    use WithPagination;
    public $paginationTheme = 'bootstrap';

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $allBuku = Buku::where('judul_buku', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(10);

        return view('components.buku-search', [
            'bukus' => $allBuku,
        ]);
    }
};
?>
<div>
    <input type="text" name="search" wire:model.live.debounce.300ms="search" id="search" class="form-control mb-4"
        placeholder="Cari berdasarkan judul buku....">
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
                            <a href="{{ route('buku.edit', $item->id_buku) }}" class="btn-warning btn mr-2">Edit</a>

                            {{-- DELETE BUTTON --}}
                            <form action="{{ route('buku.destroy', $item->id_buku) }}" method="post">
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
                    <td colspan="6" class="text-muted text-center">Belum ada data buku!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-4">
        {{ $bukus->links() }}
    </div>

</div>
