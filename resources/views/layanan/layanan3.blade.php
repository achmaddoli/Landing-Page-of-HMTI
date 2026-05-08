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
        <li class="nav-item"><a class="nav-link active" href="/psdm">PSDM</a></li>
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
            <img src="{{ asset('gambar/psdm-1.webp') }}" class="img-main shadow">
        </div>
        {{-- Right Side --}}
        <div class="col-md-5">
            <div class="row g-3">
                <div class="col-6"><img src="{{ asset('gambar/psdm-2.webp') }}" class="img-sub shadow"></div>
                <div class="col-6"><img src="{{ asset('gambar/psdm-3.webp') }}" class="img-sub shadow"></div>
                <div class="col-6"><img src="{{ asset('gambar/psdm-4.webp') }}" class="img-sub shadow"></div>
                <div class="col-6"><img src="{{ asset('gambar/psdm-4.webp') }}" class="img-sub shadow"></div>
            </div>
        </div>
    </div>

    {{-- DESCRIPTION --}}
    <div class="text-center my-5 px-lg-5">
        <h2 class="fw-bold text-hmti-primary mb-3">Departemen PSDM</h2>
        <p class="text-secondary fs-5 lh-lg">
            Departemen Pemberdayaan Sumber Daya Mahasiswa (PSDM) merupakan satu diantara lima departemen yang ada di Himpunan Mahasiswa Teknologi Informasi yang berfungsi sebagai pengembang standar anggota/fungsionaris di dalam Himpunan Mahasiswa Teknologi Informasi sehingga dapat dioptimalkan menjadi lebih baik agar Himpunan Mahasiswa Teknologi Informasi dapat meraih tujuan bersama secara menyeluruh. Departemen PSDM juga melakukan regenerasi fungsionaris di Himpunan Mahasiswa Teknologi Informasi, agar Himpunan Mahasiswa Teknologi Informasi dapat terus berjalan dan terus membaik seiring berjalannya waktu dengan batas waktu yang tidak ditentukan.
        </p>
    </div>

    {{-- LIST TABLE (PROGRAM KERJA & AGENDA) --}}
    <div class="row mt-5 g-4">
        <div class="col-md-6 border-end">
            <h4 class="fw-bold text-center mb-4 text-hmti-primary">Program Kerja</h4>
            <ul class="list-group list-group-flush fs-5">
                <li class="list-group-item bg-transparent py-3">Psikotes</li>
                <li class="list-group-item bg-transparent py-3">Open Recruitment</li>
                <li class="list-group-item bg-transparent py-3">Pemilihan Ketua Umum</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h4 class="fw-bold text-center mb-4 text-hmti-primary">Agenda</h4>
            <ul class="list-group list-group-flush fs-5">
                <li class="list-group-item bg-transparent py-3">Upgrading</li>
            </ul>
        </div>
    </div>
</div>
</x-layout>
