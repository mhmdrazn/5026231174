@extends('template')
@section('content')

	<h3>Keranjang Belanja</h3>
    <br>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark text-center">
                <tr>
                    <th class="text-center">Kode Pembelian</th>
                    <th class="text-center">Kode Barang</th>
                    <th class="text-center">Jumlah Pembelian</th>
                    <th class="text-center">Harga per item</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($keranjang as $k)
                <tr>
                    <td class="text-center">{{ $k->ID }}</td>
                    <td class="text-center">{{ ($k->KodeBarang) }}</td>
                    <td class="text-center">{{ $k->Jumlah }} Buah</td>
                    <td class="text-center">Rp{{ number_format($k->Harga, 0, ',', '.') }}</td>
                    <td class="text-center">Rp{{ number_format(($k->Jumlah) * ($k->Harga), 0, ',', '.') }}</td>
                    <td class="text-center">
                        <a href="/latihan3/edit/{{ $k->ID }}" class="btn btn-sm btn-primary mr-1">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="/latihan3/delete/{{ $k->ID }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash"></i> Batal
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
        <div>
            {{-- {{ $karyawan->links() }} --}}
        </div>
    </div>

    <br>
    <br>
@endsection
