<x-layoutAdmin>
    {{-- BREADCRUMB & HEADER --}}
    <div class="mb-4">
        <h2 class="fw-bold mb-1 text-hmti-primary">Tambah Berita</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mb-0">
                <li class="breadcrumb-item"><a href="{{ route('berita.index') }}" class="text-decoration-none text-muted">Manajemen Berita</a></li>
                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page">Tulis Baru</li>
            </ol>
        </nav>
    </div>

    {{-- KONTEN FORM --}}
    <div class="row">
        <div class="col-lg-10">
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
                    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-4">
                            {{-- Input Judul --}}
                            <div class="col-md-8">
                                <label for="judul" class="form-label fw-bold text-dark">Judul Berita <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg rounded-3 fs-6 bg-light" id="judul" name="judul" placeholder="Masukkan judul berita yang menarik" required autocomplete="off">
                            </div>

                            {{-- Input Tanggal --}}
                            <div class="col-md-4">
                                <label for="tgl" class="form-label fw-bold text-dark">Tanggal Publikasi <span class="text-danger">*</span></label>
                                <input type="date" class="form-control form-control-lg rounded-3 fs-6 bg-light" id="tgl" name="tgl" required>
                            </div>

                            {{-- Input Gambar/Poster --}}
                            <div class="col-12">
                                <label for="image" class="form-label fw-bold text-dark">Cover / Poster Berita <span class="text-danger">*</span></label>
                                <input type="file" class="form-control form-control-lg rounded-3 fs-6 bg-light" id="image" name="image" accept="image/*" required>
                                <div class="form-text text-muted mt-2"><i class="bx bx-info-circle"></i> Gunakan gambar dengan resolusi yang baik (Landscape direkomendasikan).</div>
                            </div>

                            {{-- Input Isi Teks --}}
                            <div class="col-12">
                                <label for="isi" class="form-label fw-bold text-dark">Isi Berita <span class="text-danger">*</span></label>
                                {{-- Jika Anda menggunakan CKEditor/Summernote, text-area ini akan otomatis tergantikan. Jika tidak, tetap berupa text area biasa. --}}
                                <textarea class="form-control rounded-3 bg-light" id="isi" name="isi" rows="12" placeholder="Ketik isi berita selengkapnya di sini..." required></textarea>
                            </div>
                        </div>

                        {{-- ACTION BUTTONS --}}
                        <div class="d-flex gap-2 mt-5 pt-4 border-top">
                            <button type="submit" class="btn text-white bg-hmti-primary border-0 px-4 py-2 rounded-pill fw-bold shadow-sm d-flex align-items-center">
                                <i class="bx bx-send fs-5 me-2"></i> Publikasikan
                            </button>
                            <a href="{{ route('berita.index') }}" class="btn btn-light px-4 py-2 rounded-pill fw-bold border shadow-sm text-secondary">
                                Batal
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-layoutAdmin>
