<x-layoutAdmin>
    {{-- BREADCRUMB & HEADER --}}
    <div class="mb-4">
        <h2 class="fw-bold mb-1 text-hmti-primary">Tambah Fungsionaris</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mb-0">
                <li class="breadcrumb-item"><a href="{{ route('fungsionaris.index') }}" class="text-decoration-none text-muted">Manajemen Fungsionaris</a></li>
                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page">Tambah Data</li>
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
                    <form action="{{ route('fungsionaris.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-4">
                            {{-- Input Nama --}}
                            <div class="col-md-6">
                                <label for="nama" class="form-label fw-bold text-dark">Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg rounded-3 fs-6 bg-light" id="nama" name="nama" placeholder="Masukkan nama lengkap" required autocomplete="off">
                            </div>

                            {{-- Dropdown Jabatan --}}
                            <div class="col-md-6">
                                <label for="nama_jabatan" class="form-label fw-bold text-dark">Pilih Divisi / Jabatan <span class="text-danger">*</span></label>
                                <select class="form-select form-select-lg rounded-3 fs-6 bg-light" id="nama_jabatan" name="nama_jabatan" required>
                                    <option value="" selected disabled>-- Pilih Jabatan --</option>
                                    @foreach($jabatans as $jabatan)
                                        <option value="{{ $jabatan['nama_jabatan'] }}">{{ $jabatan['nama_jabatan'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Input Gambar --}}
                            <div class="col-12">
                                <label for="image" class="form-label fw-bold text-dark">Upload Foto Profil <span class="text-danger">*</span></label>
                                <input type="file" class="form-control form-control-lg rounded-3 fs-6 bg-light" id="image" name="image" accept="image/*" required>
                                <div class="form-text text-muted mt-2"><i class="bx bx-info-circle"></i> Gunakan foto resmi/almamater (Rasio 1:1 direkomendasikan).</div>
                            </div>
                        </div>

                        {{-- ACTION BUTTONS --}}
                        <div class="d-flex gap-2 mt-5 pt-4 border-top">
                            <button type="submit" class="btn text-white bg-hmti-primary border-0 px-4 py-2 rounded-pill fw-bold shadow-sm d-flex align-items-center">
                                <i class="bx bx-save fs-5 me-2"></i> Simpan Data
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
