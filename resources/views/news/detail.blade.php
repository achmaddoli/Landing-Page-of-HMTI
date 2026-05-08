paste kode ini di folder news/detail.blade.php:

<x-layout>
    {{-- CUSTOM STYLING --}}
    <style>
        .text-hmti-primary {
            color: #0b1f40 !important;
        }

        /* Styling untuk area isi teks */
        .article-content {
            line-height: 1.8;
            font-size: 1.1rem;
            color: #495057;
            text-align: justify;
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }

        /* Efek hover tombol kembali */
        .btn-back {
            transition: 0.3s;
        }

        .btn-back:hover {
            transform: translateX(-5px);
            color: #0b1f40 !important;
        }
    </style>

    <div class="container py-5 mt-4 mb-5">
        <div class="row justify-content-center">

            <div class="col-lg-8">

                {{-- Tombol Kembali --}}
                <a href="/news"
                    class="text-decoration-none text-secondary mb-4 d-inline-flex align-items-center fw-bold btn-back">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-arrow-left me-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    Kembali ke Daftar Berita
                </a>

                {{-- Header Artikel (Badge, Judul, Tanggal) --}}
                <div class="mb-4">
                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm">News &
                        Update</span>

                    <h1 class="fw-bold text-hmti-primary display-5 mb-3 lh-sm">{{ $news->judul }}</h1>

                    <div class="text-muted d-flex align-items-center gap-2 border-bottom pb-4 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-clock" viewBox="0 0 16 16">
                            <path
                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                        <span class="fw-medium">Dipublikasikan pada {{ $news->tgl }}</span>
                    </div>
                </div>

                {{-- Gambar Cover Artikel --}}
                @if ($news->image)
                    <div class="mb-5 text-center">
                        <img src="{{ asset('poster/' . $news->image) }}" alt="{{ $news->judul }}"
                            class="img-fluid rounded-4 shadow-sm w-100" style="object-fit: cover;">
                    </div>
                @endif

                {{-- Isi Artikel --}}
                <div class="article-content bg-white p-0 border-0">
                    {!! nl2br(e($news->isi)) !!}
                </div>

            </div>

        </div>
    </div>
</x-layout>
