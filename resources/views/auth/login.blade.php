<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- UBAH TITLE & FAVICON --}}
    <title>Login Portal - HMTI Polinema</title>
    <link rel="icon" href="{{ asset('gambar/logo-hmti.png') }}">

    {{-- BOOTSTRAP 5 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- CUSTOM STYLING --}}
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .text-hmti-primary { color: #0b1f40 !important; }
        .bg-hmti-primary { background-color: #0b1f40 !important; color: #ffffff; }

        .login-card {
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: 0 1rem 3rem rgba(0,0,0,.15);
        }

        /* Area branding kiri */
        .branding-side {
            background: linear-gradient(135deg, #0b1f40 0%, #1a365d 100%);
            position: relative;
        }
        /* Pattern Overlay Opsional */
        .branding-side::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjIiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNSkiLz48L3N2Zz4=') repeat;
            opacity: 0.5;
        }

        .form-control:focus {
            border-color: #0b1f40;
            box-shadow: 0 0 0 0.25rem rgba(11, 31, 64, 0.25);
        }

        .btn-hover { transition: all 0.3s ease; }
        .btn-hover:hover { transform: translateY(-2px); box-shadow: 0 .5rem 1rem rgba(0,0,0,.15); }
    </style>
</head>

<body class="vh-100 d-flex align-items-center justify-content-center">

    <main class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12">

                {{-- CARD UTAMA --}}
                <div class="card border-0 login-card bg-white">
                    <div class="row g-0">

                        {{-- SISI KIRI: BRANDING (Hanya tampil di layar medium ke atas) --}}
                        <div class="col-md-6 d-none d-md-flex branding-side align-items-center justify-content-center flex-column p-5 text-center z-1">
                            <img src="{{ asset('gambar/logo-hmti.png') }}" alt="Logo HMTI" width="120" class="mb-4 drop-shadow">
                            <h2 class="fw-bold text-white mb-2">HMTI POLINEMA</h2>
                            <p class="text-white-50 fs-6 px-4">Portal administrasi dan manajemen data Himpunan Mahasiswa Teknologi Informasi Politeknik Negeri Malang.</p>
                        </div>

                        {{-- SISI KANAN: FORM LOGIN --}}
                        <div class="col-md-6 p-4 p-md-5 d-flex flex-column justify-content-center">

                            <div class="mb-5 text-center text-md-start">
                                {{-- Munculkan logo kecil di mobile karena sisi kiri hilang --}}
                                <img src="{{ asset('gambar/logo-hmti.png') }}" alt="Logo HMTI" width="60" class="d-md-none mb-3">
                                <h3 class="fw-bold text-hmti-primary mb-1">Selamat Datang!</h3>
                                <p class="text-secondary">Silakan login untuk mengakses sistem.</p>
                            </div>

                            {{-- FORM LOGIC (TIDAK ADA YANG DIUBAH) --}}
                            <form action="{{ route('login') }}" method="POST">
                                @csrf

                                {{-- Input Email (Menggunakan Floating Label Bootstrap) --}}
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control rounded-4" id="email" name="email" placeholder="nama@email.com" required>
                                    <label for="email" class="text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope me-2" viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/></svg>
                                        Alamat Email
                                    </label>
                                </div>

                                {{-- Input Password --}}
                                <div class="form-floating mb-4">
                                    <input type="password" class="form-control rounded-4" id="password" name="password" placeholder="Password" required>
                                    <label for="password" class="text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-lock me-2" viewBox="0 0 16 16"><path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/></svg>
                                        Password
                                    </label>
                                </div>

                                {{-- Tombol Submit --}}
                                <button type="submit" class="btn btn-warning w-100 py-3 rounded-4 fw-bold fs-6 mb-3 btn-hover text-dark shadow-sm">
                                    Login
                                </button>
                            </form>

                            {{-- Link Kembali ke Beranda --}}
                            <div class="text-center mt-4">
                                <a href="/" class="text-decoration-none text-muted fw-medium d-inline-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left me-1" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/></svg>
                                    Kembali ke Beranda
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    {{-- SCRIPTS (TIDAK ADA YANG DIUBAH) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @include('sweetalert::alert')
</body>
</html>
