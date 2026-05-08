<x-layoutAdmin>
    <div class="mb-4">
        <h2 class="fw-bold mb-1 text-hmti-primary">Profil Saya</h2>
        <p class="text-muted mb-0">Informasi detail akun administrator Anda</p>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 col-md-8">
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                {{-- Header Card dengan Background Biru --}}
                <div class="bg-hmti-primary text-center py-5 position-relative">
                    <div class="position-absolute top-100 start-50 translate-middle">
                        {{-- Avatar Inisial --}}
                        <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center fw-bold shadow-lg border border-4 border-white" style="width: 100px; height: 100px; font-size: 2.5rem; text-transform: uppercase;">
                            {{ substr($user->name, 0, 1) }}
                        </div>
                    </div>
                </div>

                {{-- Body Card --}}
                <div class="card-body px-5 pt-5 pb-4 text-center mt-3">
                    <h3 class="fw-bold text-dark mb-1">{{ $user->name }}</h3>
                    <p class="text-muted mb-4"><i class="bx bx-envelope me-1"></i> {{ $user->email }}</p>

                    <div class="d-flex justify-content-center gap-3 mt-4">
                        <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-warning px-4 py-2 rounded-pill fw-bold shadow-sm text-dark d-flex align-items-center">
                            <i class="bx bx-edit me-2"></i> Edit Profil
                        </a>
                        <a href="/admin/admin" class="btn btn-light px-4 py-2 rounded-pill fw-bold border shadow-sm text-secondary">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layoutAdmin>
