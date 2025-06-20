<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\KaryawanController;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // Create
    public function create(){
        // memanggil view tambah
        return view('latihan1/tambah');
    }

    public function store(Request $request){
    // Validasi manual: cek apakah kodepegawai sudah ada di tabel
        $existing = DB::table('karyawan')->where('kodepegawai', $request->kode)->first();

        if ($existing) {
            // Jika sudah ada, redirect kembali dengan error
            return redirect()->back()
                ->with('error', 'Kode Pegawai sudah digunakan. Silakan masukkan kode lain.')
                ->withInput(); // Untuk menyimpan input sebelumnya
        }

        // Jika belum ada, insert data ke tabel karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kode,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        // Alihkan ke halaman index
        return redirect('/latihan1')->with('success', 'Data berhasil ditambahkan!');
    }

    // Read
    public function read(){
        // ambil data dari table kipasangin
        $karyawan = DB::table('karyawan')->get();

        return view('/latihan1/index', ['karyawan'=> $karyawan]);
    }

    // Update
    public function edit($ID){
        // mengambil data kipasangin berdasarkan id yang dipilih
        $karyawan = DB::table('karyawan')->where('kodepegawai', $kodepegawai)->get();


        return view('latihan1/edit', ['karyawan' => $karyawan]);
    }

    public function update(Request $request){
        DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->update([
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect('latihan1/index');
    }

    // Delete
    public function delete($id){
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai', $id)->delete();

        return redirect('/latihan1');
    }

    // Search
    public function cari(Request $request){
		// menangkap data pencarian
		$cari = $request->cari;

		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->paginate();

		return view('latihan1/index',['karyawan' => $karyawan]);
	}
}
