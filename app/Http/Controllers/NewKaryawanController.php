<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\KaryawanController;
use Illuminate\Http\Request;

class NewKaryawanController extends Controller
{
    // Read
    public function read(){
        $karyawan = DB::table('newkaryawan')->get();

        return view('eas/index', ['karyawan'=> $karyawan]);
    }


    // Create
    public function create(){
        // memanggil view tambah
        return view('eas/tambah');
    }

    public function store(Request $request){
        $existing = DB::table('newkaryawan')->where('NIP', $request->nip)->first();

        if ($existing){
            return redirect()->back()
                ->with('error', 'Kode Pegawai sudah digunakan. Silakan masukkan kode lain.')
                ->withInput();

                return confirm('Yakin ingin menghapus data karyawn ini?');
        };

        DB::table('newkaryawan')->insert([
            'NIP' => $request->nip,
            'nama' => $request->nama,
            'pangkat' => $request->pangkat,
            'gaji' => $request->gaji
        ]);

        // Alihkan ke halaman index
        return redirect('/eas')->with('success', 'Data berhasil ditambahkan!');

    }

    // Delete
    public function delete($NIP){
        DB::table('newkaryawan')->where('NIP', $NIP)->delete();

        return redirect('/eas');
    }
}
