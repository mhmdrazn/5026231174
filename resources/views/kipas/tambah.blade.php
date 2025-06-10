@extends('template')
@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <!-- Header -->
            <div class="mb-4">
                <h3 class="mb-3">Tambah Kipas Angin</h3>
                <a href="/tugascrud">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>

            <!-- Form Card -->
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <form action="/tugascrud/store" method="POST" id="kipasForm">
                        @csrf

                        <!-- Merk Field -->
                        <div class="mb-3">
                            <label for="merk" class="form-label fw-semibold">
                                Merk Kipas Angin <span class="text-danger">*</span>
                            </label>
                            <input type="text"
                                   class="form-control @error('merk') is-invalid @enderror"
                                   id="merk"
                                   name="merk"
                                   value="{{ old('merk') }}"
                                   placeholder="Contoh: Panasonic, Sharp, Miyako"
                                   required>
                            @error('merk')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Harga Field -->
                        <div class="mb-3">
                            <label for="harga" class="form-label fw-semibold">
                                Harga Kipas Angin <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number"
                                       class="form-control @error('harga') is-invalid @enderror"
                                       id="harga"
                                       name="harga"
                                       value="{{ old('harga') }}"
                                       placeholder="150000"
                                       min="0"
                                       step="1000"
                                       required>
                                @error('harga')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <small class="form-text text-muted">Masukkan harga dalam rupiah</small>
                        </div>

                        <!-- Status Ketersediaan Toggle -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Status Ketersediaan</label>
                            <div class="custom-control custom-switch">
                                <input type="checkbox"
                                       class="custom-control-input"
                                       name="tersedia"
                                       value="1"
                                       id="tersediaToggle"
                                       {{ old('tersedia') ? 'checked' : '' }}
                                       onchange="updateToggleLabel(this)">
                                <label class="custom-control-label" for="tersediaToggle">
                                    <span id="toggleLabel" class="fw-bold ms-2 toggle-status">
                                        {{ old('tersedia') ? 'Tersedia' : 'Tidak Tersedia' }}
                                    </span>
                                </label>
                            </div>
                        </div>

                        <!-- Berat Field -->
                        <div class="mb-4">
                            <label for="berat" class="form-label fw-semibold">
                                Berat <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <input type="number"
                                       class="form-control @error('berat') is-invalid @enderror"
                                       id="berat"
                                       name="berat"
                                       value="{{ old('berat') }}"
                                       placeholder="2.5"
                                       min="0"
                                       step="0.1"
                                       required>
                                <span class="input-group-text">Kg</span>
                                @error('berat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <small class="form-text text-muted">Berat dalam kilogram (contoh: 2.5)</small>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                                <i class="bi bi-plus-circle me-2"></i>Tambah Kipas Angin
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
.toggle-status {
    transition: color 0.3s ease;
}

.custom-control-input:checked ~ .custom-control-label .toggle-status {
    color: #28a745 !important;
}

.custom-control-input:not(:checked) ~ .custom-control-label .toggle-status {
    color: #dc3545 !important;
}

.card {
    border: none;
    border-radius: 12px;
}

.card-body {
    border-radius: 12px;
}

.form-control:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
}

.btn-primary {
    background: linear-gradient(45deg, #0d6efd, #0b5ed7);
    border: none;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
}

.input-group-text {
    background-color: #f8f9fa;
    border-color: #dee2e6;
    font-weight: 500;
}

.fw-semibold {
    font-weight: 600;
}

@media (max-width: 576px) {
    .container {
        padding: 0 15px;
    }

    .card-body {
        padding: 1.5rem !important;
    }
}
</style>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Update toggle label function
    function updateToggleLabel(toggle) {
        const label = document.getElementById('toggleLabel');
        if (toggle.checked) {
            label.textContent = 'Tersedia';
            label.style.color = '#28a745';
        } else {
            label.textContent = 'Tidak Tersedia';
            label.style.color = '#dc3545';
        }
    }

    // Make function globally available
    window.updateToggleLabel = updateToggleLabel;
});
</script>

@endsection
