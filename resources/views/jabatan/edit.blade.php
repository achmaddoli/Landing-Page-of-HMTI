<x-layoutAdmin>
    {{-- BREADCRUMB & HEADER --}}
    <div class="mb-4">
        <h2 class="fw-bold mb-1 text-hmti-primary">Edit Jabatan</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mb-0">
                <li class="breadcrumb-item"><a href="{{ route('jabatan.admin') }}" class="text-decoration-none text-muted">Manajemen Jabatan</a></li>
                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page">Edit Data #{{ $jabatan->id }}</li>
            </ol>
        </nav>
    </div>

    {{-- KONTEN FORM --}}
    <div class="row">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-md-5">

                    {{-- FORM INPUT --}}
                    <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="nama_jabatan" class="form-label fw-bold text-dark">Nama Jabatan <span class="text-danger">*</span></label>
                            <input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control form-control-lg rounded-3 fs-6 bg-light" value="{{ $jabatan->nama_jabatan }}" required autocomplete="off">
                            <div class="form-text text-muted mt-2"><i class="bx bx-info-circle"></i> Pastikan nama jabatan relevan dengan struktur organisasi HMTI.</div>
                        </div>

                        {{-- ACTION BUTTONS --}}
                        <div class="d-flex gap-2 mt-5 pt-3 border-top">
                            <button type="submit" class="btn btn-warning px-4 py-2 rounded-pill fw-bold shadow-sm text-dark d-flex align-items-center">
                                <i class="bx bx-check fs-5 me-2"></i> Update Data
                            </button>
                            <a href="{{ route('jabatan.admin') }}" class="btn btn-light px-4 py-2 rounded-pill fw-bold border shadow-sm text-secondary">
                                Batal
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-layoutAdmin>
