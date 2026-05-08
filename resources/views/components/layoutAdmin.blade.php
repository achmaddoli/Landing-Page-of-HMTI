<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Admin Dashboard - HMTI POLINEMA</title>
    <link rel="icon" href="{{ asset('gambar/logo-hmti.png') }}">

    {{-- BOOTSTRAP 5 & VENDOR CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

    {{-- CUSTOM CSS DASHBOARD --}}
    <style>
        body {
            overflow-x: hidden;
            background-color: #f4f7f6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .text-hmti-primary { color: #0b1f40 !important; }
        .bg-hmti-primary { background-color: #0b1f40 !important; }

        /* Layout Wrapper */
        #wrapper {
            display: flex;
            transition: all 0.3s ease;
        }

        /* Sidebar Styling */
        #sidebar-wrapper {
            min-height: 100vh;
            width: 260px;
            transition: margin 0.3s ease;
            z-index: 1000;
        }

        /* Konten Utama */
        #page-content-wrapper {
            flex-grow: 1;
            min-width: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Toggle Sidebar (Desktop vs Mobile) */
        #wrapper.toggled #sidebar-wrapper { margin-left: -260px; }

        @media (max-width: 768px) {
            #sidebar-wrapper { margin-left: -260px; position: fixed; height: 100%; }
            #wrapper.toggled #sidebar-wrapper { margin-left: 0; }
            #wrapper.toggled::after {
                content: ""; background: rgba(0,0,0,0.5); position: fixed;
                top: 0; left: 0; right: 0; bottom: 0; z-index: 999;
            }
        }

        .cursor-pointer { cursor: pointer; transition: 0.3s; }
        .cursor-pointer:hover { color: #ffc107 !important; }

        /* Styling Tabel Custom */
        .card-table { border-radius: 1rem; border: none; box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05); }
    </style>
</head>
<body>

    <div id="wrapper">
        {{-- SIDEBAR COMPONENT --}}
        <x-navbarAdmin></x-navbarAdmin>

        {{-- PAGE CONTENT --}}
        <div id="page-content-wrapper">

            {{-- TOP NAVBAR (PROFILE & LOGOUT) --}}
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm px-4 py-3 sticky-top">
                <div class="d-flex align-items-center">
                    {{-- Tombol Toggle Sidebar --}}
                    <i class="bx bx-menu fs-3 cursor-pointer" id="menu-toggle" style="color: #0b1f40;"></i>
                </div>

                {{-- Menu Kanan --}}
                <div class="ms-auto d-flex align-items-center">
                    <div class="dropdown">
                        <a class="text-decoration-none text-dark d-flex align-items-center dropdown-toggle" href="#" role="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            {{-- Mengambil Inisial Huruf Pertama dari Nama --}}
                            <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center fw-bold me-2 shadow-sm" style="width: 40px; height: 40px; text-transform: uppercase;">
                                {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
                            </div>
                            {{-- Menampilkan Nama Admin --}}
                            <span class="fw-medium d-none d-sm-inline">{{ Auth::user()->name ?? 'Administrator' }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-3 rounded-3" aria-labelledby="profileDropdown">
                            <li>
                                <div class="px-4 py-2 text-center border-bottom mb-2">
                                    <h6 class="fw-bold mb-0 text-hmti-primary">{{ Auth::user()->name ?? 'Admin HMTI' }}</h6>
                                    <small class="text-muted">{{ Auth::user()->email ?? 'admin@email.com' }}</small>
                                </div>
                            </li>
                            {{-- Link ke Halaman Profil --}}
                            <li><a class="dropdown-item py-2 d-flex align-items-center" href="{{ route('profile.index') }}"><i class="bx bx-user me-3 fs-5"></i> Profil Saya</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item text-danger py-2 d-flex align-items-center fw-bold" href="{{ route('logout') }}">
                                    <i class="bx bx-log-out me-3 fs-5"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            {{-- KONTEN DINAMIS --}}
            <main class="container-fluid p-4 flex-grow-1">
                {{ $slot }}
            </main>

            {{-- FOOTER ADMIN --}}
            <footer class="bg-white text-center py-3 border-top mt-auto">
                <p class="mb-0 text-muted small fw-medium">© 2026 HMTI POLINEMA | Sistem Informasi Manajemen</p>
            </footer>

        </div>
    </div>

    {{-- SCRIPTS BAWAAN & TAMBAHAN --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')

    {{-- Inisialisasi DataTables --}}
    <script>
        $(document).ready(function () {
            $('#tabel-jabatan').DataTable();
            $('#tabel-pegawai').DataTable();
        });
    </script>

    {{-- Logic SweetAlert Hapus --}}
    <script>
        function confirmDelete(button) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    button.closest('form').submit();
                }
            })
        }
    </script>

    {{-- Script Baru Toggle Sidebar Mobile/Desktop --}}
    <script>
        document.getElementById("menu-toggle").addEventListener("click", function(e) {
            e.preventDefault();
            document.getElementById("wrapper").classList.toggle("toggled");
        });

        // Menutup sidebar jika mengklik overlay di mobile
        document.getElementById("wrapper").addEventListener("click", function(e) {
            if (window.innerWidth <= 768 && this.classList.contains('toggled') && e.target.id === 'wrapper') {
                this.classList.remove("toggled");
            }
        });
    </script>
</body>
</html>
