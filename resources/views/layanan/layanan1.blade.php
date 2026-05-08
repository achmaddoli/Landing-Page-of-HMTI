<x-layout>
<style>
    .text-hmti-primary { color: #0b1f40 !important; }
    .nav-dept .nav-link { color: #6c757d; font-weight: 500; border: none; }
    .nav-dept .nav-link.active { color: #0b1f40; border-bottom: 3px solid #0b1f40; border-radius: 0; }

    /* Masonry Image Style */
    .img-main { height: 500px; object-fit: cover; border-radius: 15px; width: 100%; }
    .img-sub { height: 240px; object-fit: cover; border-radius: 15px; width: 100%; }
    .img-small { height: 180px; object-fit: cover; border-radius: 15px; width: 100%; }
</style>

{{-- DEPT NAVIGATION TABS --}}
<div class="container mt-4">
    <ul class="nav nav-dept justify-content-center gap-4 border-bottom mb-5">
        <li class="nav-item"><a class="nav-link active" href="/bph">BPH</a></li>
        <li class="nav-item"><a class="nav-link" href="/internal">Internal</a></li>
        <li class="nav-item"><a class="nav-link" href="/psdm">PSDM</a></li>
        <li class="nav-item"><a class="nav-link" href="/rmb">RMB</a></li>
        <li class="nav-item"><a class="nav-link" href="/eksternal">Eksternal</a></li>
        <li class="nav-item"><a class="nav-link" href="/kominfo">Kominfo</a></li>
    </ul>
</div>

<div class="container mb-5">
    {{-- IMAGE GRID PSDM (5 GAMBAR) --}}
    <div class="row g-3">
        {{-- Hero Image --}}
        <div class="col-md-7 position-relative">
            <img src="{{ asset('gambar/bph-1.webp') }}" class="img-main shadow">
        </div>
        {{-- Right Side --}}
        <div class="col-md-5">
            <div class="row g-3">
                <div class="col-6"><img src="{{ asset('gambar/bph-2.webp') }}" class="img-sub shadow"></div>
                <div class="col-6"><img src="{{ asset('gambar/bph-3.webp') }}" class="img-sub shadow"></div>
            </div>
        </div>
    </div>

    {{-- DESCRIPTION --}}
    <div class="text-center my-5 px-lg-5">
        <h2 class="fw-bold text-hmti-primary mb-3">Badan Pengurus Harian</h2>
        <p class="text-secondary fs-5 lh-lg">
            Badan Pengurus Harian (BPH) merupakan organ inti yang bertanggung jawab penuh atas jalannya seluruh program, koordinasi antar departemen, pencatatan administrasi (kesekretariatan), serta sirkulasi keuangan Himpunan Mahasiswa Teknologi Informasi Politeknik Negeri Malang Periode 2025/2026.
        </p>
    </div>
</div>
</x-layout>
