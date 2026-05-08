<x-layoutAdmin>
    {{-- BREADCRUMB & HEADER --}}
    <div class="mb-4">
        <h2 class="fw-bold mb-1 text-hmti-primary">Tambah Jabatan Baru</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mb-0">
                <li class="breadcrumb-item"><a href="{{ route('jabatan.index') }}" class="text-decoration-none text-muted">Manajemen Jabatan</a></li>
                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page">Tambah Data</li>
            </ol>
        </nav>
    </div>

    {{-- KONTEN FORM --}}
    <div class="row">
        <div class="col-lg-6">
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
                    <form action="{{ route('jabatan.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nama_jabatan" class="form-label fw-bold text-dark">Nama Jabatan <span class="text-danger">*</span></label>
                            <input class="form-control form-control-lg rounded-3 fs-6 bg-light" type="text" name="nama_jabatan" id="nama_jabatan" placeholder="Contoh: Ketua Umum / Divisi Kominfo" required autocomplete="off">
                        </div>

                        {{-- ACTION BUTTONS --}}
                        <div class="d-flex gap-2 mt-5 pt-3 border-top">
                            <button type="submit" class="btn text-white bg-hmti-primary border-0 px-4 py-2 rounded-pill fw-bold shadow-sm d-flex align-items-center">
                                <i class="bx bx-save fs-5 me-2"></i> Simpan Data
                            </button>
                            <a href="{{ route('jabatan.index') }}" class="btn btn-light px-4 py-2 rounded-pill fw-bold border shadow-sm text-secondary">
                                Batal
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-layoutAdmin>
