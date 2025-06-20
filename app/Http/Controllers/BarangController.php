<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // Create
    public function create(){
        return view('latihan3/tambah');
    }

    public function store(Request $request){
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kode,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga,
        ]);
        return redirect('/latihan3');

    }

    // Read
    public function read(){
        $keranjang = DB::table('keranjangbelanja')->get();

        return view('latihan3/index', ['keranjang'=> $keranjang]);
    }

    // Update
    public function edit(){
        $keranjang = DB::table('keranjangbelanja')->first();

        return view('latihan3/edit', ['keranjang' => $keranjang]);
    }

    public function update(Request $request){
        DB::table('keranjangbelanja')->where('ID', $request->ID)->update([
            'KodeBarang' => $request->kode,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga,
        ]);

        return redirect('/latihan3');
    }

    // Delete
    public function delete($ID){
        DB::table('keranjangbelanja')->where('ID', $ID)->delete();

        return redirect('/latihan3');
    }
}
