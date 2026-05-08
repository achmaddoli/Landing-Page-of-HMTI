<x-layout>
    {{-- CUSTOM STYLING --}}
    <style>
        .text-hmti-primary { color: #0b1f40 !important; }
        .bg-hmti-primary { background-color: #0b1f40 !important; color: #ffffff; }

        .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.15) !important;
        }

        .page-header {
            background: linear-gradient(135deg, #0b1f40 0%, #1a365d 100%);
            padding: 4rem 0;
            margin-bottom: 3rem;
        }

        /* Styling tambahan agar pagination bawaan laravel terlihat lebih rapi */
        .pagi nav svg { width: 20px; }
    </style>

    {{-- HEADER HALAMAN --}}
    <div class="page-header text-center text-white shadow-sm">
        <div class="container">
            <h1 class="display-5 fw-bold mb-2">Berita & Media</h1>
            <p class="fs-5 text-warning fw-light">Informasi, Artikel, dan Kegiatan Terbaru HMTI Polinema</p>
        </div>
    </div>

    {{-- KONTEN UTAMA --}}
    <div class="container py-4 mb-5">
        @if(!empty($news) && count($news) > 0)
            {{-- Grid Layout (3 kolom di Desktop, 2 di Tablet, 1 di Mobile) --}}
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                @foreach ($news as $n)
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-4 card-hover overflow-hidden">
                            <div class="card-body p-4 d-flex flex-column">

                                {{-- Tanggal --}}
                                <div class="mb-3 text-muted small d-flex align-items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 text-warning" viewBox="0 0 16 16"><path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/><path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>
                                    {{ $n->tgl }}
                                </div>

                                {{-- Judul --}}
                                <h4 class="card-title fw-bold text-hmti-primary mb-3">{{ $n->judul }}</h4>

                                {{-- Excerpt/Isi Singkat --}}
                                <p class="card-text text-secondary flex-grow-1" style="line-height: 1.6;">
                                    {{ Str::limit($n['isi'], 150) }}
                                </p>

                                {{-- Tombol Baca --}}
                                <div class="mt-4">
                                    <a href="{{ route('news.show', $n->id) }}" class="btn btn-outline-dark rounded-pill fw-bold px-4 w-100 transition">Baca Selengkapnya</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            {{-- Pagination Bawaan Laravel --}}
            <div class="d-flex justify-content-center mt-5 pagi">
                {{ $news->links() }}
            </div>

        @else
            {{-- Empty State jika tidak ada berita --}}
            <div class="text-center py-5 my-5">
                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 100px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#6c757d" class="bi bi-journal-x" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z"/><path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/><path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/></svg>
                </div>
                <h4 class="text-secondary fw-bold">Belum ada berita yang diterbitkan.</h4>
            </div>
        @endif
    </div>
</x-layout>
