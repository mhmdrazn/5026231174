@extends('template')
@section('content')

	<h3>Keranjang Belanja</h3>

    <br/>
    <a href="/latihan3/edit" class="btn btn-md btn-primary mr-1">
        <i class="bi bi-pencil"></i> Edit
    </a>

    <br/>
    <br/>


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

    <br>
@endsection
