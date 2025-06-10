@extends('template')
@section('content')

	<h3>Tugas CRUD</h3>
    <br>

    <a href="/tugascrud/tambah" class="btn btn-success">
        Tambah Kipas Angin <i class="bi bi-plus-circle ms-2"></i>
    </a>
    <br>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Daftar Kipas Angin</h5>
        <div class="mb-4">
            <form action="/tugascrud/cari" method="GET" class="d-flex" style="max-width:400px; gap:10px;">
                <input type="text" name="cari" class="form-control" placeholder="Cari kipas angin..." value="{{ old('cari') }}">
                <button class="btn btn-secondary" type="submit">
                <i class="bi bi-search"></i> Cari
                </button>
            </form>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Merk</th>
                <th>Harga</th>
                <th>Tersedia</th>
                <th>Berat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kipas as $k)
            <tr>
                <td>{{ $k->merkkipasangin }}</td>
                <td>{{ $k->hargakipasangin }}</td>
                <td>{{ $k->tersedia }}</td>
                <td>{{ $k->berat }}</td>
                <td>
                    <a href="/tugascrud/edit/{{ $k->ID }}" class="btn btn-primary">Edit</a>
                    <form action="/tugascrud/delete/{{ $k->ID }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br/>
    {{ $kipas->links() }}

@endsection
