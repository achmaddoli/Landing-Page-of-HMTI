<x-layoutAdmin>
    <div class="mb-4">
        <h2 class="fw-bold mb-1 text-hmti-primary">Edit Profil Saya</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mb-0">
                <li class="breadcrumb-item"><a href="{{ route('profile.index') }}" class="text-decoration-none text-muted">Profil Saya</a></li>
                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page">Edit Profil</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-md-5">

                    <form action="{{ route('profile.update', $user->id) }}" method="POST">
                        @csrf

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-bold text-dark">Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg rounded-3 fs-6 bg-light" id="name" name="name" value="{{ $user->name }}" required>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label fw-bold text-dark">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control form-control-lg rounded-3 fs-6 bg-light" id="email" name="email" value="{{ $user->email }}" required>
                            </div>

                            <div class="col-md-6 mt-5">
                                <label for="password" class="form-label fw-bold text-dark">Password Baru</label>
                                <input type="password" class="form-control form-control-lg rounded-3 fs-6 bg-light" id="password" name="password" placeholder="Ketik password baru">
                                <div class="form-text text-muted"><i class="bx bx-info-circle"></i> Kosongkan jika tidak ingin mengubah password.</div>
                            </div>

                            <div class="col-md-6 mt-lg-5">
                                <label for="password_confirmation" class="form-label fw-bold text-dark">Konfirmasi Password</label>
                                <input type="password" class="form-control form-control-lg rounded-3 fs-6 bg-light" id="password_confirmation" name="password_confirmation" placeholder="Ulangi password baru">
                            </div>
                        </div>

                        <div class="d-flex gap-2 mt-5 pt-4 border-top">
                            <button type="submit" class="btn text-white bg-hmti-primary border-0 px-4 py-2 rounded-pill fw-bold shadow-sm d-flex align-items-center">
                                <i class="bx bx-check fs-5 me-2"></i> Simpan Perubahan
                            </button>
                            <a href="{{ route('profile.index') }}" class="btn btn-light px-4 py-2 rounded-pill fw-bold border shadow-sm text-secondary">
                                Batal
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-layoutAdmin>
