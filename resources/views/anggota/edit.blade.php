<x-layouts.app title="Tambah Anggota">
    <h3 class="mt-3 mb-1 text-dark">Edit Anggota</h3>
    <p class="text-muted small">Mengupdate data anggota baru</p>

    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 text-primary fw-bold">Form Edit Anggota</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('anggota.update', $anggota->id_anggota) }}" method="post">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="nama_anggota" class="form-label">Nama</label>
                            <input type="text" name="nama_anggota" id="nama_anggota"
                                class="form-control @error('nama_anggota') is-invalid @enderror"
                                placeholder="Hanni Pham" minlength="1" maxlength="100" required
                                value="{{ old('nama_anggota', $anggota->nama_anggota) }}">
                            @error('nama_anggota')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="nisn" class="form-label">NISN</label>
                            <input type="numeric" name="nisn" id="nisn"
                                class="form-control @error('nisn') is-invalid @enderror" placeholder="0089717778"
                                minlength="10" maxlength="10" required value="{{ old('nisn', $anggota->nisn) }}">
                            @error('nisn')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" name="kelas" id="kelas"
                                class="form-control @error('kelas') is-invalid @enderror" placeholder="XII PPLG 3"
                                minlength="1" maxlength="20" required value="{{ old('kelas', $anggota->kelas) }}">
                            @error('kelas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label class="form-label d-block">Jenis Kelamin</label>
                            {{-- LAKI LAKI --}}
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="radioDefault1"
                                    value="L" @if ($anggota->jenis_kelamin == 'L') checked @endif>
                                <label class="form-check-label" for="radioDefault1">
                                    Laki-laki
                                </label>
                            </div>
                            {{-- PEREMPUAN --}}
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="radioDefault2"
                                    value="P" @if ($anggota->jenis_kelamin == 'P') checked @endif>
                                <label class="form-check-label" for="radioDefault2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-warning">Edit Anggota</button>
            </form>
        </div>
    </div>
</x-layouts.app>
