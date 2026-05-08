<x-layoutAdmin>
    {{-- BREADCRUMB & HEADER --}}
    <div class="mb-4">
        <h2 class="fw-bold mb-1 text-hmti-primary">Edit Berita</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mb-0">
                <li class="breadcrumb-item"><a href="{{ route('berita.index') }}" class="text-decoration-none text-muted">Manajemen Berita</a></li>
                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page">Edit Data #{{ $news->id }}</li>
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
                    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-4">
                            {{-- Input Judul --}}
                            <div class="col-md-8">
                                <label for="judul" class="form-label fw-bold text-dark">Judul Berita <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg rounded-3 fs-6 bg-light" id="judul" name="judul" value="{{ $news->judul }}" required autocomplete="off">
                            </div>

                            {{-- Input Tanggal --}}
                            <div class="col-md-4">
                                <label for="tgl" class="form-label fw-bold text-dark">Tanggal Publikasi <span class="text-danger">*</span></label>
                                <input type="date" class="form-control form-control-lg rounded-3 fs-6 bg-light" id="tgl" name="tgl" value="{{ $news->tgl }}" required>
                            </div>

                            {{-- Input Isi Teks --}}
                            <div class="col-12">
                                <label for="isi" class="form-label fw-bold text-dark">Isi Berita <span class="text-danger">*</span></label>
                                <textarea class="form-control rounded-3 bg-light" id="isi" name="isi" rows="12" required>{!! $news->isi !!}</textarea>
                            </div>

                            {{-- Input Gambar & Preview --}}
                            <div class="col-12 mt-4">
                                <label for="image" class="form-label fw-bold text-dark">Ganti Cover / Poster Berita</label>

                                <div class="d-flex flex-column flex-md-row align-items-md-center gap-4 mt-2">
                                    {{-- Preview Current Image --}}
                                    @if(isset($news['image']))
                                        <div class="text-center">
                                            <img src="{{ asset('poster/' . $news['image']) }}" alt="Current Poster" class="rounded-3 shadow-sm border border-3 border-light" style="width: 200px; height: auto; max-height: 120px; object-fit: cover;">
                                            <div class="small text-muted mt-2">Cover Saat Ini</div>
                                        </div>
                                    @endif

                                    <div class="flex-grow-1">
                                        <input type="file" class="form-control form-control-lg rounded-3 fs-6 bg-light" id="image" name="image" accept="image/*">
                                        <div class="form-text text-muted mt-2">
                                            <i class="bx bx-info-circle text-warning"></i> Kosongkan bagian ini jika Anda tidak ingin mengubah gambar sampul berita.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ACTION BUTTONS --}}
                        <div class="d-flex gap-2 mt-5 pt-4 border-top">
                            <button type="submit" class="btn btn-warning px-4 py-2 rounded-pill fw-bold shadow-sm text-dark d-flex align-items-center">
                                <i class="bx bx-check fs-5 me-2"></i> Update Berita
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
