<header class="header sticky-top bg-white shadow-sm" id="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            {{-- BRAND & LOGO --}}
            <a class="navbar-brand d-flex align-items-center gap-3" href="/">
                <img src="{{ asset('gambar/logo-hmti.png') }}" alt="Logo HMTI" width="55" class="img-fluid" />
                <div class="lh-sm border-start border-2 border-dark ps-3">
                    <span class="fw-bold d-block" style="color: #0b1f40; font-size: 1.1rem; letter-spacing: 0.5px;">HMTI POLINEMA</span>
                    <span class="fw-bold d-block text-dark" style="font-size: 0.9rem;">2025 / 2026</span>
                </div>
            </a>

            {{-- TOMBOL HAMBURGER MOBILE BOOTSTRAP --}}
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- MENU ITEMS --}}
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-4">
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-dark px-0" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        {{-- Menggunakan route bawaan /profil --}}
                        <a class="nav-link fw-bold text-dark px-0" href="/profil">Struktur Organisasi</a>
                    </li>
                    <li class="nav-item">
                        {{-- Menggunakan route bawaan /news --}}
                        <a class="nav-link fw-bold text-dark px-0" href="/news">Berita</a>
                    </li>
                </ul>

                {{-- TOMBOL KANAN --}}
                <div class="d-flex mt-3 mt-lg-0">
                    {{-- Menggunakan route bawaan /login --}}
                    <a id="btn-login" href="/login" class="btn btn-warning rounded-pill px-4 py-2 fw-bold text-dark shadow-sm custom-btn-hover">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Kustom CSS kecil untuk efek hover navbar --}}
    <style>
        .navbar-nav .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #ffc107 !important;
        }
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: 0;
            left: 0;
            background-color: #ffc107;
            transition: width 0.3s ease;
            border-radius: 2px;
        }
        .navbar-nav .nav-link:hover::after {
            width: 100%;
        }
        .custom-btn-hover:hover {
            transform: translateY(-2px);
            transition: 0.3s ease-in-out;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }
    </style>
</header>
