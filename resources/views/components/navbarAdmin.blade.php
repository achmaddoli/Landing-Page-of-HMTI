<div class="bg-hmti-primary shadow-sm text-white d-flex flex-column" id="sidebar-wrapper">

    {{-- LOGO BRANDING --}}
    <div class="sidebar-heading text-center py-4 border-bottom border-secondary bg-dark bg-opacity-10">
        <img src="{{ asset('gambar/logo-hmti.png') }}" alt="Logo HMTI" width="60" class="mb-3 drop-shadow">
        <h5 class="fw-bold mb-0 text-warning tracking-wide">HMTI POLINEMA</h5>
        <small class="text-white-50">Admin Panel</small>
    </div>

    {{-- MENU LIST --}}
    <div class="list-group list-group-flush my-3 flex-grow-1">

        <p class="text-white-50 small fw-bold px-4 mt-4 mb-1 text-uppercase">Manajemen Data</p>

        <a href="/admin/jabatan" class="list-group-item list-group-item-action bg-transparent text-white border-0 py-3 px-4 d-flex align-items-center sidebar-link">
            <i class="bx bx-sitemap fs-4 me-3"></i>
            <span class="fw-medium">Jabatan</span>
        </a>

        <a href="/admin/pegawai" class="list-group-item list-group-item-action bg-transparent text-white border-0 py-3 px-4 d-flex align-items-center sidebar-link">
            <i class="bx bx-group fs-4 me-3"></i>
            <span class="fw-medium">Fungsionaris</span>
        </a>

        <a href="/admin/berita" class="list-group-item list-group-item-action bg-transparent text-white border-0 py-3 px-4 d-flex align-items-center sidebar-link">
            <i class="bx bx-news fs-4 me-3"></i>
            <span class="fw-medium">Berita & Artikel</span>
        </a>

    </div>
</div>

{{-- CSS KHUSUS ANIMASI HOVER SIDEBAR --}}
<style>
    .sidebar-link { transition: all 0.3s ease; position: relative; }

    .sidebar-link:hover {
        background-color: rgba(255, 193, 7, 0.1) !important;
        color: #ffc107 !important;
        padding-left: 2rem !important;
    }

    /* Indikator menu aktif (opsional, sesuaikan dgn logic routing nanti jika mau) */
    .sidebar-link.active {
        background-color: rgba(255, 193, 7, 0.1) !important;
        color: #ffc107 !important;
        border-left: 4px solid #ffc107 !important;
    }
</style>
