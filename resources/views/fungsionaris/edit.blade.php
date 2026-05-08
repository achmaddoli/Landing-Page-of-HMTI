<x-layoutAdmin>
    {{-- BREADCRUMB & HEADER --}}
    <div class="mb-4">
        <h2 class="fw-bold mb-1 text-hmti-primary">Edit Fungsionaris</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mb-0">
                <li class="breadcrumb-item"><a href="{{ route('fungsionaris.index') }}" class="text-decoration-none text-muted">Manajemen Fungsionaris</a></li>
                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page">Edit Data #{{ $fungsionaris['id'] }}</li>
            </ol>
        </nav>
    </div>

    {{-- KONTEN FORM --}}
    <div class="row">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-md-5">

                    {{-- FLASH MESSAGES --}}
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show rounded-3" role="alert">
                            <i class="bx bx-check-circle me-1"></i> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show rounded-3" role="alert">
                            <i class="bx bx-error-circle me-1"></i> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- FORM INPUT --}}
                    <form action="{{ route('fungsionaris.update', $fungsionaris['id']) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-4">
                            {{-- Input Nama --}}
                            <div class="col-md-6">
                                <label for="nama" class="form-label fw-bold text-dark">Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg rounded-3 fs-6 bg-light" id="nama" name="nama" value="{{ $fungsionaris['nama'] }}" required autocomplete="off">
                            </div>

                            {{-- Dropdown Jabatan --}}
                            <div class="col-md-6">
                                <label for="nama_jabatan" class="form-label fw-bold text-dark">Pilih Divisi / Jabatan <span class="text-danger">*</span></label>
                                <select class="form-select form-select-lg rounded-3 fs-6 bg-light" id="nama_jabatan" name="nama_jabatan" required>
                                    @foreach($jabatans as $jabatan)
                                        <option value="{{ $jabatan['nama_jabatan'] }}" {{ $fungsionaris['id_jabatan'] == $jabatan['id'] ? 'selected' : '' }}>
                                            {{ $jabatan['nama_jabatan'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Input Gambar & Preview --}}
                            <div class="col-12 mt-4">
                                <label for="image" class="form-label fw-bold text-dark">Upload Foto Profil Baru</label>

                                <div class="d-flex align-items-center gap-4 mt-2">
                                    {{-- Preview Current Image --}}
                                    @if(isset($fungsionaris['image']))
                                        <div class="text-center">
                                            <img src="{{ asset('foto/' . $fungsionaris['image']) }}" alt="Current Photo" class="rounded-circle shadow-sm border border-3 border-light" style="width: 100px; height: 100px; object-fit: cover;">
                                            <div class="small text-muted mt-2">Foto Saat Ini</div>
                                        </div>
                                    @endif

                                    <div class="flex-grow-1">
                                        <input type="file" class="form-control form-control-lg rounded-3 fs-6 bg-light" id="image" name="image" accept="image/*">
                                        <div class="form-text text-muted mt-2">
                                            <i class="bx bx-info-circle text-warning"></i> Kosongkan jika tidak ingin mengubah foto.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ACTION BUTTONS --}}
                        <div class="d-flex gap-2 mt-5 pt-4 border-top">
                            <button type="submit" class="btn btn-warning px-4 py-2 rounded-pill fw-bold shadow-sm text-dark d-flex align-items-center">
                                <i class="bx bx-check fs-5 me-2"></i> Update Data
                            </button>
                            <a href="{{ route('fungsionaris.index') }}" class="btn btn-light px-4 py-2 rounded-pill fw-bold border shadow-sm text-secondary">
                                Batal
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-layoutAdmin>
