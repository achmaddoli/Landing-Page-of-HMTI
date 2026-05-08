<x-layout>
<style>
    .text-hmti-primary { color: #0b1f40 !important; }
    .nav-dept .nav-link { color: #6c757d; font-weight: 500; border: none; }
    .nav-dept .nav-link.active { color: #0b1f40; border-bottom: 3px solid #0b1f40; border-radius: 0; }

    /* Masonry Image Style */
    .img-main { height: 600px; object-fit: cover; border-radius: 15px; width: 100%; }
    .img-sub { height: 240px; object-fit: cover; border-radius: 15px; width: 100%; }
    .img-small { height: 180px; object-fit: cover; border-radius: 15px; width: 100%; }
</style>

{{-- DEPT NAVIGATION TABS --}}
<div class="container mt-4">
    <ul class="nav nav-dept justify-content-center gap-4 border-bottom mb-5">
        <li class="nav-item"><a class="nav-link" href="/bph">BPH</a></li>
        <li class="nav-item"><a class="nav-link active" href="/internal">Internal</a></li>
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
            <img src="{{ asset('gambar/internal-1.webp') }}" class="img-main shadow">
        </div>
        {{-- Right Side --}}
        <div class="col-md-5">
            <div class="row g-3">
                <div class="col-6"><img src="{{ asset('gambar/internal-2.webp') }}" class="img-sub shadow"></div>
                <div class="col-6"><img src="{{ asset('gambar/internal-3.webp') }}" class="img-sub shadow"></div>
                <div class="col-6"><img src="{{ asset('gambar/internal-4.webp') }}" class="img-sub shadow"></div>
                <div class="col-6"><img src="{{ asset('gambar/internal-4.webp') }}" class="img-sub shadow"></div>
            </div>
        </div>
    </div>

    {{-- DESCRIPTION --}}
    <div class="text-center my-5 px-lg-5">
        <h2 class="fw-bold text-hmti-primary mb-3">Departemen Internal</h2>
        <p class="text-secondary fs-5 lh-lg">
            Departemen Internal merupakan salah satu departemen yang berada di dalam struktur Himpunan Mahasiswa Teknologi Informasi Politeknik Negeri Malang Periode 2025/2026. Departemen Internal memiliki tugas yang berhubungan dengan fungsionaris, inventaris, sekretariat dan kewirausahaan Himpunan Mahasiswa Teknologi Informasi.
        </p>
    </div>

    {{-- LIST TABLE (PROGRAM KERJA & AGENDA) --}}
    <div class="row mt-5 g-4">
        <div class="col-md-6 border-end">
            <h4 class="fw-bold text-center mb-4 text-hmti-primary">Program Kerja</h4>
            <ul class="list-group list-group-flush fs-5">
                <li class="list-group-item bg-transparent py-3">Musyawarah Kerja</li>
                <li class="list-group-item bg-transparent py-3">Dies Natalis</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h4 class="fw-bold text-center mb-4 text-hmti-primary">Agenda</h4>
            <ul class="list-group list-group-flush fs-5">
                <li class="list-group-item bg-transparent py-3">Inventaris</li>
                <li class="list-group-item bg-transparent py-3">Halal Bi Halal</li>
                <li class="list-group-item bg-transparent py-3">Jadwal Piket</li>
                <li class="list-group-item bg-transparent py-3">Peduli Sosial</li>
                <li class="list-group-item bg-transparent py-3">Kewirausahaan</li>
                <li class="list-group-item bg-transparent py-3">Kajian Internal</li>
                <li class="list-group-item bg-transparent py-3">Refreshing</li>
            </ul>
        </div>
    </div>
</div>
</x-layout>
