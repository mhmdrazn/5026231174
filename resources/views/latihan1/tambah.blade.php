@extends('template')
@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12">
            <!-- Header -->
            <div class="mb-4">
                <h3 class="mb-3">Tambah Data Karyawan</h3>
                <a href="/latihan1">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>

            <!-- Form Card -->
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <form action="/latihan1/store" method="POST" id="kipasForm">
                        @csrf

                        <!-- Nama Field -->
                        <div class="mb-3 row align-items-center">
                            <label for="merk" class="col-sm-3 col-form-label fw-semibold">
                                Kode Karyawan
                            </label>
                            <div class="col-sm-9">
                                <input type="text"
                                       class="form-control @error('kode') is-invalid @enderror"
                                       id="kode"
                                       name="kode"
                                       value="{{ old('kode') }}"
                                       placeholder="Masukkan kode karyawan"
                                       required>
                                @error('kode')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    <script>
                                        alert("{{ $message }}");
                                    </script>
                                @enderror
                            </div>
                        </div>

                        <!-- Nama Field -->
                        <div class="mb-3 row align-items-center">
                            <label for="merk" class="col-sm-3 col-form-label fw-semibold">
                                Nama Karyawan
                            </label>
                            <div class="col-sm-9">
                                <input type="text"
                                       class="form-control @error('nama') is-invalid @enderror"
                                       id="nama"
                                       name="nama"
                                       value="{{ old('namalengkap') }}"
                                       placeholder="Masukkan nama karyawan"
                                       required>
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Harga Field -->
                        <div class="mb-3 row align-items-center">
                            <label for="divisi" class="col-sm-3 col-form-label fw-semibold">
                                Divisi
                            </label>
                            <div class="col-sm-9">
                                <input type="text"
                                    class="form-control @error('divisi') is-invalid @enderror"
                                    id="divisi"
                                    name="divisi"
                                    value="{{ old('divisi') }}"
                                    placeholder="Masukkan divisi karyawan"
                                    required>
                                @error('divisi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Departemen Field -->
                        <div class="mb-3 row align-items-center">
                            <label for="departemen" class="col-sm-3 col-form-label fw-semibold">
                                Departemen
                            </label>
                            <div class="col-sm-9">
                                <input type="text"
                                    class="form-control @error('departemen') is-invalid @enderror"
                                    id="departemen"
                                    name="departemen"
                                    value="{{ old('departemen') }}"
                                    placeholder="Masukkan departemen"
                                    required>
                                @error('departemen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <br>

                        <!-- Submit Button -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                                <i class="bi bi-plus-circle me-2"></i>Simpan
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
