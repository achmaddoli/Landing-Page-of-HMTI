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
        <li class="nav-item"><a class="nav-link" href="/internal">Internal</a></li>
        <li class="nav-item"><a class="nav-link" href="/psdm">PSDM</a></li>
        <li class="nav-item"><a class="nav-link" href="/rmb">RMB</a></li>
        <li class="nav-item"><a class="nav-link" href="/eksternal">Eksternal</a></li>
        <li class="nav-item"><a class="nav-link active" href="/kominfo">Kominfo</a></li>
    </ul>
</div>

<div class="container mb-5">
    {{-- IMAGE GRID PSDM (5 GAMBAR) --}}
    <div class="row g-3">
        {{-- Hero Image --}}
        <div class="col-md-7 position-relative">
            <img src="{{ asset('gambar/rmb-1.webp') }}" class="img-main shadow">
        </div>
        {{-- Right Side --}}
        <div class="col-md-5">
            <div class="row g-3">
                <div class="col-6"><img src="{{ asset('gambar/rmb-2.webp') }}" class="img-sub shadow"></div>
                <div class="col-6"><img src="{{ asset('gambar/rmb-3.webp') }}" class="img-sub shadow"></div>
                <div class="col-6"><img src="{{ asset('gambar/rmb-4.webp') }}" class="img-sub shadow"></div>
                <div class="col-6"><img src="{{ asset('gambar/rmb-4.webp') }}" class="img-sub shadow"></div>
            </div>
        </div>
    </div>

    {{-- DESCRIPTION --}}
    <div class="text-center my-5 px-lg-5">
        <h2 class="fw-bold text-hmti-primary mb-3">Departemen RMB</h2>
        <p class="text-secondary fs-5 lh-lg">
            Departemen Ristek Minat dan Bakat (RMB) merupakan salah satu departemen yang berada di dalam Himpunan Mahasiswa Teknologi Informasi Politeknik Negeri Malang. Departemen ini memiliki ruang lingkup untuk mengembangkan minat dan bakat serta memiliki fokus utama untuk mengenalkan serta mempersiapkan Mahasiswa Jurusan Teknologi Informasi untuk mengikuti perlombaan di bidang akademik ataupun non-akademik. Selain itu, departemen ini juga menaungi Workshop dan Riset Informatika dengan Information Technology Department English Community.
        </p>
    </div>

    {{-- LIST TABLE (PROGRAM KERJA & AGENDA) --}}
    <div class="row mt-5 g-4">
        <div class="col-md-6 border-end">
            <h4 class="fw-bold text-center mb-4 text-hmti-primary">Program Kerja</h4>
            <ul class="list-group list-group-flush fs-5">
                <li class="list-group-item bg-transparent py-3">Internal Competition</li>
                <li class="list-group-item bg-transparent py-3">Seminar Nasional</li>
                <li class="list-group-item bg-transparent py-3">Semarak Pekan Olahraga Teknologi Informasi</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h4 class="fw-bold text-center mb-4 text-hmti-primary">Agenda</h4>
            <ul class="list-group list-group-flush fs-5">
                <li class="list-group-item bg-transparent py-3">Brain Boost</li>
                <li class="list-group-item bg-transparent py-3">Publikasi Lomba</li>
                <li class="list-group-item bg-transparent py-3">Olahraga JTI</li>
                <li class="list-group-item bg-transparent py-3">Sosialisasi Lomba</li>
            </ul>
        </div>
    </div>
</div>
</x-layout>
