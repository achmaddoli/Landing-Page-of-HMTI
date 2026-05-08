<x-layout>
    {{-- CUSTOM STYLING --}}
    <style>
        .text-hmti-primary { color: #0b1f40 !important; }
        .bg-hmti-primary { background-color: #0b1f40 !important; color: #ffffff; }

        .card-hover { transition: all 0.3s ease-in-out; }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.15) !important;
        }

        /* Styling spesifik untuk foto pengurus agar seragam bulat */
        .g-fungsionaris {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #f8f9fa;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
            margin: 0 auto;
        }

        .page-header {
            background: linear-gradient(135deg, #0b1f40 0%, #1a365d 100%);
            padding: 4rem 0;
            margin-bottom: 3rem;
        }
    </style>

    {{-- HEADER HALAMAN PROFIL --}}
    <div class="page-header text-center text-white shadow-sm">
        <div class="container">
            <h1 class="display-5 fw-bold mb-2">Struktur Organisasi</h1>
            <p class="fs-5 text-warning fw-light">Himpunan Mahasiswa Teknologi Informasi Periode 2025/2026</p>
        </div>
    </div>

    {{-- 1. TENTANG HMTI (Profil) --}}
    <div class="container py-5">
        <div class="row align-items-center mb-5 gap-4 gap-lg-0">
            <div class="col-lg-6 pe-lg-5">
               <div class="position-relative">
    <a href="https://www.youtube.com/watch?v=iBuGENjafZ8" target="_blank" class="d-block">
        <img src="https://img.youtube.com/vi/iBuGENjafZ8/maxresdefault.jpg"
             alt="Video Profil HMTI"
             class="img-fluid rounded-4 shadow-lg w-100"
             style="object-fit: cover; min-height: 350px;">
    </a>
</div>
            </div>
            <div class="col-lg-6">
                <div class="badge bg-warning text-dark mb-3 px-3 py-2 rounded-pill fw-bold">About Us</div>
                <h2 class="fw-bold text-hmti-primary mb-4 display-6">Profil HMTI</h2>
                <p class="text-secondary fs-5 lh-lg">
                    Himpunan Mahasiswa Teknologi Informasi atau yang biasa disebut HMTI adalah Himpunan Mahasiswa yang dinaungi oleh Jurusan Teknologi Informasi sebagai wadah dan aspirasi serta pelayanan bagi Mahasiswa Jurusan Teknologi Informasi. HMTI berdiri pada tanggal 7 Maret 2015.
                </p>
            </div>
        </div>
    </div>

    {{-- 2. VISI & MISI SECTION --}}
    <div class="bg-light py-5 my-4">
        <div class="container my-4">
            <div class="row g-4 align-items-stretch">
                {{-- Card Visi --}}
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 p-md-5 card-hover">
                        <div class="card-body text-center d-flex flex-column justify-content-center">
                            <h3 class="fw-bold text-hmti-primary mb-4 text-uppercase tracking-wide">Visi</h3>
                            <p class="text-secondary fs-5 lh-lg mb-0">
                                "Meningkatkan Himpunan Mahasiswa Teknologi Informasi yang semakin sinergis dan berprestasi, serta mendukung pengembangan kompetensi dan peningkatan penyaluran aspirasi mahasiswa Jurusan Teknologi Informasi."
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Card Misi --}}
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 p-md-5 card-hover">
                        <div class="card-body">
                            <h3 class="fw-bold text-hmti-primary mb-4 text-center text-uppercase tracking-wide">Misi</h3>
                            <ol class="text-secondary fs-6 lh-lg mb-0 ps-3">
                                <li class="mb-3">Menguatkan sinergi antar anggota Himpunan Mahasiswa Teknologi Informasi untuk peningkatan kompetensi, serta menciptakan ekosistem organisasi yang prestatif.</li>
                                <li class="mb-3">Menjalankan program kerja yang berfokus pada peningkatan prestasi akademik dan non akademik yang bersifat jangka panjang.</li>
                                <li>Peningkatan Efektivitas Wadah Penyaluran Aspirasi mahasiswa Jurusan Teknologi Informasi.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 3. GAMBAR STRUKTUR ORGANISASI --}}
    <div class="container py-5 my-4 text-center">
        <div class="badge bg-warning text-dark mb-3 px-3 py-2 rounded-pill fw-bold">Bagan Kepengurusan</div>
        <h2 class="fw-bold text-hmti-primary mb-5 display-6">Struktur Organisasi</h2>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <img src="{{ asset('gambar/struktur.png') }}" alt="Struktur Organisasi HMTI" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>

    {{-- 4. PEGAWAI -> FUNGSIONARIS (Looping Backend) --}}
    <div class="bg-hmti-primary py-5">
        <div class="container my-5 text-center">
            <h2 class="fw-bold text-white mb-2 display-6">Fungsionaris HMTI</h2>
            <p class="text-warning mb-5 fs-5">Mengenal lebih dekat pengurus inti HMTI Polinema</p>

            @if(!empty($fungsionaris))
            <div class="slide-container2 swiper px-4 py-3">
                <div class="slide-content overflow-hidden">
                    <div class="card-wrapper swiper-wrapper">

                        @foreach($fungsionaris as $f)
                        <div class="card swiper-slide bg-transparent border-0">
                            <div class="card-content bg-white rounded-4 shadow-sm p-4 m-2 text-center card-hover h-100 d-flex flex-column justify-content-center">

                                {{-- FOTO --}}
                                <img src="{{ asset('foto/' . $f['image']) }}" alt="{{ $f['nama'] }}" class="g-fungsionaris mb-4">

                                {{-- NAMA & JABATAN --}}
                                <h5 class="fw-bold text-hmti-primary mb-1">{{ $f['nama'] }}</h5>
                                <p class="text-secondary fw-bold mb-0" style="font-size: 0.9rem;">{{ $f['jabatan']['nama_jabatan'] }}</p>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                {{-- Navigasi Bawaan Swiper JS --}}
                <div class="swiper-button-next text-warning"></div>
                <div class="swiper-button-prev text-warning"></div>
                <div class="swiper-pagination position-relative mt-4"></div>
            </div>
            @else
                <div class="alert alert-warning d-inline-block mt-4" role="alert">
                    Belum ada data fungsionaris yang ditambahkan.
                </div>
            @endif
        </div>
    </div>

</x-layout>
