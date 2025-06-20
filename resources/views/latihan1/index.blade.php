@extends('template')
@section('content')

	<h3>Data Karyawan</h3>
    <br>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark text-center">
                <tr>
                    <th>Kode Pegawai</th>
                    <th class="text-center">Nama Lengkap</th>
                    <th class="text-center">Divisi</th>
                    <th class="text-center">Departemen</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawan as $k)
                <tr>
                    <td>{{ $k->kodepegawai }}</td>
                    <td class="text-center">{{ strtoupper($k->namalengkap) }}</td>
                    <td class="text-center">{{ $k->divisi }}</td>
                    <td class="text-center">{{ strtolower($k->departemen) }}</td>
                    <td class="text-center">
                        <form action="/latihan1/delete/{{ $k->kodepegawai }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-between align-items-center mt-3">
        <a href="/latihan1/tambah" class="btn btn-success">
            Tambah Karyawan <i class="bi bi-plus-circle ms-2"></i>
        </a>
    </div>

    <br>
    <br>
@endsection
