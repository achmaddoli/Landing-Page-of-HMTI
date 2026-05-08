<x-layoutAdmin>
    {{-- HEADER HALAMAN --}}
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 pb-2 border-bottom">
        <div class="mb-3 mb-md-0">
            <h2 class="fw-bold mb-1 text-hmti-primary">Manajemen Berita</h2>
            <p class="text-muted mb-0">Kelola artikel, berita, dan informasi kegiatan HMTI</p>
        </div>
        <div>
            <a href="{{ route('berita.create') }}" class="btn btn-warning fw-bold rounded-pill px-4 py-2 shadow-sm d-flex align-items-center">
                <i class="bx bx-plus-circle fs-5 me-2"></i> Tambah Berita Baru
            </a>
        </div>
    </div>

    {{-- KONTEN TABEL --}}
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle w-100" id="tabel-jabatan">
                    <thead class="bg-hmti-primary text-white">
                        <tr>
                            <th width="5%" class="text-center rounded-start">ID</th>
                            <th width="15%" class="text-center">Gambar</th>
                            <th width="20%">Judul Berita</th>
                            <th width="10%">Tanggal</th>
                            <th width="35%">Cuplikan Isi</th>
                            <th width="15%" class="text-center rounded-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($news))
                            @foreach ($news as $n)
                                <tr>
                                    <td class="text-center fw-bold text-secondary">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('poster/' . $n->image) }}" alt="{{ $n->judul }}" class="rounded-3 shadow-sm border" style="width: 100px; height: 65px; object-fit: cover;">
                                    </td>
                                    <td class="fw-bold text-dark">{{ $n->judul }}</td>
                                    <td>
                                        <span class="badge bg-light text-dark border px-2 py-1">
                                            <i class="bx bx-calendar me-1 text-warning"></i> {{ $n->tgl }}
                                        </span>
                                    </td>
                                    <td>
                                        {{-- Membatasi tinggi teks agar tabel tidak melebar panjang ke bawah --}}
                                        <div class="text-secondary small" style="max-height: 60px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            {!! $n->isi !!}
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-2">
                                            {{-- Tombol Edit --}}
                                            <a href="{{ route('berita.edit', $n->id) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3 d-flex align-items-center">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </a>

                                            {{-- Tombol Hapus (Menggunakan SweetAlert layoutAdmin) --}}
                                            <form action="{{ route('berita.destroy', $n->id) }}" method="POST" class="m-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-sm btn-outline-danger rounded-pill px-3 d-flex align-items-center" onclick="confirmDelete(this)">
                                                    <i class="bx bx-trash me-1"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layoutAdmin>
