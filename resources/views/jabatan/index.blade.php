<x-layoutAdmin>
    {{-- HEADER HALAMAN --}}
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 pb-2 border-bottom">
        <div class="mb-3 mb-md-0">
            <h2 class="fw-bold mb-1 text-hmti-primary">Manajemen Jabatan</h2>
            <p class="text-muted mb-0">Kelola struktur jabatan HMTI</p>
        </div>
        <div>
            <a href="{{ route('jabatan.create') }}" class="btn btn-warning fw-bold rounded-pill px-4 py-2 shadow-sm d-flex align-items-center">
                <i class="bx bx-plus-circle fs-5 me-2"></i> Tambah Data Baru
            </a>
        </div>
    </div>

    {{-- KONTEN TABEL --}}
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">
            <div class="table-responsive">
                {{-- ID tabel "tabel-jabatan" tidak diubah agar DataTables tetap jalan --}}
                <table class="table table-hover align-middle w-100" id="tabel-jabatan">
                    <thead class="bg-hmti-primary text-white">
                        <tr>
                            <th width="10%" class="text-center rounded-start">ID</th>
                            <th>Nama Jabatan / Divisi</th>
                            <th width="20%" class="text-center rounded-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($jabatan))
                            @foreach ($jabatan as $jab)
                            
                                <tr>
                                    <td class="text-center fw-bold text-secondary">{{ $loop->iteration }}</td>
                                    <td class="fw-medium text-dark">{{ $jab->nama_jabatan }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-2">
                                            {{-- Tombol Edit --}}
                                            <a href="{{ route('jabatan.edit', $jab->id) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3 d-flex align-items-center">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </a>

                                            {{-- Tombol Hapus (Menggunakan SweetAlert) --}}
                                            <form action="{{ route('jabatan.destroy', $jab->id) }}" method="POST" class="m-0">
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
