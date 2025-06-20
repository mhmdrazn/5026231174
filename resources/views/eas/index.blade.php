@extends('template')
@section('content')
    <h3>Data Karyawan</h3>
    <br>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark text-center">
                <tr>
                    <th class="text-center">NIP</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Pangkat</th>
                    <th class="text-center">Gaji</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawan as $k)
                <tr>
                    <td class="text-center">{{ $k->NIP }}</td>
                    <td class="text-center">{{ $k->nama }}</td>
                    <td class="text-center">{{ $k->pangkat }}</td>
                    <td class="text-center">Rp{{ number_format($k->gaji, 0, ',', '.') }}</td>
                    <td class="text-center">
                        <form action="/eas/delete/{{ $k->NIP }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data karyawn ini?')">
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
        <a href="/eas/tambah" class="btn btn-success">
            Tambah Karyawan<i class="bi bi-plus-circle ms-2"></i>
        </a>
    </div>

    <br>
    <br>
@endsection
