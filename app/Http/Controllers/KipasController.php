<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KipasController extends Controller
{
    // Create
    public function create(){
        // memanggil view tambah
        return view('kipas/tambah');
    }

    public function store(Request $request){
        // insert data ke table kipasangin
        DB::table('kipasangin')->insert([
            'merkkipasangin' => $request->merk,
            'hargakipasangin' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman kipasangin
        return redirect('/tugascrud');
    }

    // Read
    public function read(){
        // ambil data dari table kipasangin
        $kipas = DB::table('kipasangin')->paginate(10);

        return view('kipas/crud', ['kipas'=> $kipas]);
    }

    // Update
    public function edit($ID){
        // mengambil data kipasangin berdasarkan id yang dipilih
        $kipas = DB::table('kipasangin')->where('ID', $ID)->get();


        return view('kipas/edit', ['kipasangin' => $kipas]);
    }

    public function update(Request $request){
        DB::table('kipasangin')->where('ID', $request->id)->update([
            'merkkipasangin' => $request->merk,
            'hargakipasangin' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/tugascrud');
    }

    // Delete
    public function delete($id){
        // menghapus data kipasangin berdasarkan id yang dipilih
        DB::table('kipasangin')->where('ID', $id)->delete();

        return redirect('/tugascrud');
    }

    // Search
    public function cari(Request $request){
		// menangkap data pencarian
		$cari = $request->cari;

		$kipas = DB::table('kipasangin')
		->where('merkkipasangin','like',"%".$cari."%")
		->paginate();

		return view('kipas/crud',['kipas' => $kipas]);
	}
}
