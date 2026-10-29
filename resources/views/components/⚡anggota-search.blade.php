<?php

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Anggota;

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
        $allAnggota = Anggota::query()
            ->when($this->search, function ($query) {
                $query
                    ->where('nisn', 'like', '%' . $this->search . '%')
                    ->orWhere('nama_anggota', 'like', '%' . $this->search . '%')
                    ->orWhere('kelas', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->paginate(10);

        return $this->view([
            'anggotas' => $allAnggota,
        ]);
    }
};
?>

<div>
    <input type="text" name="search" id="search" wire:model.live.debounce.300ms="search" class="form-control mb-4"
        placeholder="Cari berdasarkan NISN siswa, Kelas ataupun Nama Siswa....">

    <table class="table-striped table-bordered table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($anggotas as $item)
                <tr>
                    <td>{{ $item->id_anggota }}</td>
                    <td>{{ $item->nisn }}</td>
                    <td>{{ $item->nama_anggota }}</td>
                    <td>{{ $item->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td>
                        <div class="d-flex">
                            {{-- EDIT --}}
                            <a href="{{ route('anggota.edit', $item->id_anggota) }}" class="btn-warning btn mr-2">Edit</a>

                            {{-- DELETE --}}
                            <form action="{{ route('anggota.destroy', $item->id_anggota) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-danger btn mr-2"
                                    onclick="return confirm('Yakin ingin menghapus anggota {{ $item->nama_anggota }}')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-muted text-center">Belum ada data anggota!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-4">
        {{ $anggotas->links() }}
    </div>
</div>
