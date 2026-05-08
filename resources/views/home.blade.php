<x-layout>
    {{-- CUSTOM STYLING UNTUK OVERRIDE BOOTSTRAP & EFEK HOVER --}}
    <style>
        /* Color Palette */
        .text-hmti-primary { color: #0b1f40 !important; }
        .bg-hmti-primary { background-color: #0b1f40 !important; color: #ffffff; }
        .btn-hmti-primary { background-color: #0b1f40; color: #ffffff; border: none; }
        .btn-hmti-primary:hover { background-color: #061226; color: #ffffff; }

        /* Hero Section Overlay */
        .hero-section {
            /* Ganti gambar hero sesuai dengan kebutuhan (foto tim/kegiatan) */
            background: url('{{ asset("gambar/hero-1.webp") }}') center center / cover no-repeat;
        }
        .hero-overlay {
            background-color: rgba(11, 31, 64, 0.75); /* Biru tua transparan */
        }

        /* Card Hover Effects */
        .card-hover {
            transition: all 0.3s ease-in-out;
            border-radius: 1rem;
        }
        .card-hover:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important;
            z-index: 10;
        }
        .icon-wrapper {
            width: 70px;
            height: 70px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: #e9ecef;
            color: #0b1f40;
            margin-bottom: 1.5rem;
            transition: 0.3s;
        }
        .card-hover:hover .icon-wrapper {
            background-color: #ffc107; /* Warning yellow */
            color: #0b1f40;
        }
    </style>

    {{-- 1. HERO SECTION --}}
    <div class="container-fluid position-relative vh-100 d-flex align-items-center justify-content-center text-center hero-section p-0">
        <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay"></div>
        <div class="position-relative z-3 px-3 text-white">
            <h1 class="display-3 fw-bold mb-2 shadow-sm">HIMPUNAN MAHASISWA TEKNOLOGI INFORMASI</h1>
            <h2 class="h3 fw-light mb-2">POLITEKNIK NEGERI MALANG</h2>
            <h4 class="h5 fw-light mb-5 text-warning tracking-wide">PERIODE 2025/2026</h4>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="/profil" class="btn btn-warning px-5 py-3 rounded-pill fw-bold shadow-lg">Lihat Profil</a>
            </div>
        </div>
    </div>

    {{-- 2. TENTANG KAMI SECTION --}}
    <div id="tentang-kami" class="container py-5 my-5">
        <div class="row align-items-center gap-4 gap-lg-0">
            <div class="col-lg-6 pe-lg-5">
                <img src="{{ asset('gambar/hero-2.webp') }}" alt="Profil HMTI" class="img-fluid rounded-4 shadow-lg w-100" style="object-fit: cover; min-height: 400px;">
            </div>
            <div class="col-lg-6 ps-lg-4">
                <div class="badge bg-warning text-dark mb-3 px-3 py-2 rounded-pill fw-bold">Tentang Kami</div>
                <h2 class="fw-bold text-hmti-primary mb-4 display-6">Profil HMTI</h2>
                <p class="text-secondary fs-5 lh-lg mb-4">
                    Himpunan Mahasiswa Teknologi Informasi atau yang biasa disebut HMTI adalah Himpunan Mahasiswa yang dinaungi oleh Jurusan Teknologi Informasi sebagai wadah dan aspirasi serta pelayanan bagi Mahasiswa Jurusan Teknologi Informasi. HMTI berdiri pada tanggal 7 Maret 2015.
                </p>
                <a href="/profil" class="btn btn-hmti-primary px-4 py-2 rounded-pill shadow">Baca Selengkapnya</a>
            </div>
        </div>
    </div>

    {{-- 3. PROGRAM KERJA (LAYANAN) SECTION --}}
    <div class="bg-light py-5">
        <div class="container my-5">
            <div class="text-center mb-5">
                <div class="badge bg-warning text-dark mb-2 px-3 py-2 rounded-pill fw-bold">Divisi & Departemen</div>
                <h2 class="fw-bold text-hmti-primary display-6">Program Kerja HMTI</h2>
                <p class="text-secondary">Mengenal 6 pilar utama kepengurusan HMTI Polinema</p>
            </div>

            <div class="slide-container swiper pb-5">
                <div class="slide-content overflow-hidden px-2 py-4">
                    <div class="card-wrapper swiper-wrapper">

                        {{-- 1. BPH --}}
                        <div class="card swiper-slide border-0 shadow card-hover h-100">
                            <div class="card-body p-4 text-center d-flex flex-column">
                                <div class="icon-wrapper bg-primary text-white mb-3">BPH</div>
                                <h4 class="fw-bold text-hmti-primary mb-3">BPH</h4>
                                <p class="text-secondary flex-grow-1">Badan Pengurus Harian yang memegang kendali administrasi dan koordinasi utama organisasi.</p>
                                <a href="/bph" class="btn btn-warning rounded-pill mt-3 fw-bold">Selengkapnya</a>
                            </div>
                        </div>

                        {{-- 2. Internal --}}
                        <div class="card swiper-slide border-0 shadow card-hover h-100">
                            <div class="card-body p-4 text-center d-flex flex-column">
                                <div class="icon-wrapper bg-info text-white mb-3">INT</div>
                                <h4 class="fw-bold text-hmti-primary mb-3">Internal</h4>
                                <p class="text-secondary flex-grow-1">Fokus pada penguatan internal fungsionaris dan harmonisasi antar anggota HMTI.</p>
                                <a href="/internal" class="btn btn-warning rounded-pill mt-3 fw-bold">Selengkapnya</a>
                            </div>
                        </div>

                        {{-- 3. PSDM --}}
                        <div class="card swiper-slide border-0 shadow card-hover h-100">
                            <div class="card-body p-4 text-center d-flex flex-column">
                                <div class="icon-wrapper bg-success text-white mb-3">PSDM</div>
                                <h4 class="fw-bold text-hmti-primary mb-3">PSDM</h4>
                                <p class="text-secondary flex-grow-1">Pengembangan Sumber Daya Mahasiswa dan kaderisasi fungsionaris yang progresif.</p>
                                <a href="/psdm" class="btn btn-warning rounded-pill mt-3 fw-bold">Selengkapnya</a>
                            </div>
                        </div>

                        {{-- 4. RMB --}}
                        <div class="card swiper-slide border-0 shadow card-hover h-100">
                            <div class="card-body p-4 text-center d-flex flex-column">
                                <div class="icon-wrapper bg-danger text-white mb-3">RMB</div>
                                <h4 class="fw-bold text-hmti-primary mb-3">RMB</h4>
                                <p class="text-secondary flex-grow-1">Riset, Minat, dan Bakat yang mewadahi potensi akademik dan non-akademik mahasiswa.</p>
                                <a href="/rmb" class="btn btn-warning rounded-pill mt-3 fw-bold">Selengkapnya</a>
                            </div>
                        </div>

                        {{-- 5. Eksternal --}}
                        <div class="card swiper-slide border-0 shadow card-hover h-100">
                            <div class="card-body p-4 text-center d-flex flex-column">
                                <div class="icon-wrapper bg-primary text-white mb-3">EKS</div>
                                <h4 class="fw-bold text-hmti-primary mb-3">Eksternal</h4>
                                <p class="text-secondary flex-grow-1">Menjalin hubungan dan kolaborasi dengan instansi luar serta alumni HMTI.</p>
                                <a href="/eksternal" class="btn btn-warning rounded-pill mt-3 fw-bold">Selengkapnya</a>
                            </div>
                        </div>

                        {{-- 6. Kominfo --}}
                        <div class="card swiper-slide border-0 shadow card-hover h-100">
                            <div class="card-body p-4 text-center d-flex flex-column">
                                <div class="icon-wrapper bg-dark text-white mb-3">KOM</div>
                                <h4 class="fw-bold text-hmti-primary mb-3">Kominfo</h4>
                                <p class="text-secondary flex-grow-1">Pusat informasi, desain grafis, publikasi media sosial, dan branding digital HMTI.</p>
                                <a href="/kominfo" class="btn btn-warning rounded-pill mt-3 fw-bold">Selengkapnya</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination position-relative mt-4"></div>
            </div>
        </div>
    </div>

    {{-- 4. KONTAK KAMI SECTION --}}
    <div class="container py-5 my-5">
        <div class="row g-4 align-items-stretch">
            {{-- Kolom Kiri: CTA Email --}}
            <div class="col-lg-6">
                <div class="bg-hmti-primary text-white p-5 rounded-4 shadow-lg h-100 d-flex flex-column justify-content-center text-center">
                    <h2 class="fw-bold mb-3">Kontak Kami</h2>
                    <p class="mb-4 fs-5 fw-light">Mari diskusi dan berkolaborasi bersama HMTI. Hubungi kami melalui email untuk respon yang lebih cepat.</p>
                    
                    {{-- Menampilkan teks email --}}
                    <h4 class="fw-bold text-warning mb-5">hmtipolinema@gmail.com</h4>
                    
                    <div>
                        <a href="mailto:hmtipolinema@gmail.com" class="btn btn-warning btn-lg px-5 py-3 rounded-pill fw-bold shadow text-dark transition-hover">
                            {{-- Icon Envelope Bootstrap --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill me-2" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                            </svg>
                            Kirim Email
                        </a>
                    </div>
                </div>
            </div>

            {{-- Kolom Kanan: Alamat & Sosial Media --}}
            <div class="col-lg-6">
                <div class="bg-light p-5 rounded-4 border-0 shadow-sm h-100">
                    <h3 class="fw-bold text-hmti-primary mb-4">Sekretariat HMTI</h3>

                    <div class="d-flex mb-4 align-items-start">
                        <div class="me-3 text-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Gedung Sipil & Tata Niaga Lt. 1</h5>
                            <p class="text-secondary mb-0">Jl. Soekarno Hatta No.9, Jatimulyo, Kec. Lowokwaru,<br>Kota Malang, Jawa Timur 65141</p>
                        </div>
                    </div>

                    <hr class="text-secondary my-4">

                    <h5 class="fw-bold text-center mb-4 text-hmti-primary">Temukan kami di sosial media</h5>
                    <div class="d-flex justify-content-center gap-4">
                        {{-- Instagram --}}
                        <a href="https://www.instagram.com/hmtipolinema/">
                            <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center card-hover" style="width: 45px; height: 45px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#E4405F" viewBox="0 0 24 24">
                                    <path d="M7.75 2C4.678 2 2 4.678 2 7.75v8.5C2 19.322 4.678 22 7.75 22h8.5C19.322 22 22 19.322 22 16.25v-8.5C22 4.678 19.322 2 16.25 2h-8.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm6-1.25a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0z"/>
                                </svg>
                            </div>
                        </a>
                        {{-- X --}}
                        <a href="https://x.com/hmtipolinema">
                            <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center card-hover" style="width: 45px; height: 45px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#000000" viewBox="0 0 24 24">
                                    <path d="M18.901 1.153h3.682l-8.04 9.194 9.459 12.5H16.17l-6.145-8.034L3.1 22.847H-.584l8.593-9.82L-1.5 1.153h7.99l5.552 7.322 6.859-7.322z"/>
                                </svg>
                            </div>
                        </a>
                        {{-- YouTube --}}
                        <a href="https://www.youtube.com/@HMTIPolinema">
                            <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center card-hover" style="width: 45px; height: 45px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#FF0000" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a2.97 2.97 0 0 0-2.09-2.103C19.555 3.5 12 3.5 12 3.5s-7.555 0-9.408.583A2.97 2.97 0 0 0 .502 6.186 31.36 31.36 0 0 0 0 12a31.36 31.36 0 0 0 .502 5.814 2.97 2.97 0 0 0 2.09 2.103C4.445 20.5 12 20.5 12 20.5s7.555 0 9.408-.583a2.97 2.97 0 0 0 2.09-2.103A31.36 31.36 0 0 0 24 12a31.36 31.36 0 0 0-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </div>
                        </a>
                        {{-- TikTok --}}
                        <a href="https://www.tiktok.com/@hmtipolinema">
                            <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center card-hover" style="width: 45px; height: 45px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#000000" viewBox="0 0 24 24">
                                    <path d="M12.75 2h3.75a6.75 6.75 0 0 0 6.75 6.75v3.75a10.5 10.5 0 0 1-6.75-2.4v6.9a6.75 6.75 0 1 1-6.75-6.75 6.9 6.9 0 0 1 1.5.15v3.9a3.75 3.75 0 1 0 2.25 3.45V2z"/>
                                </svg>
                            </div>
                        </a>
                        {{-- LinkedIn --}}
                        <a href="https://www.linkedin.com/company/hmti-polinema/">
                            <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center card-hover" style="width: 45px; height: 45px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#0A66C2" viewBox="0 0 24 24">
                                    <path d="M20.451 20.451h-3.554v-5.569c0-1.328-.025-3.037-1.851-3.037-1.852 0-2.136 1.446-2.136 2.939v5.667H9.356V9h3.414v1.561h.049c.476-.9 1.637-1.851 3.369-1.851 3.601 0 4.266 2.371 4.266 5.455v6.286zM5.337 7.433a2.063 2.063 0 1 1 0-4.126 2.063 2.063 0 0 1 0 4.126zM6.999 20.451H3.673V9h3.326v11.451zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
