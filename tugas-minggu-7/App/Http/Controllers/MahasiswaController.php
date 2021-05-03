<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        // mengambil data dari table mahasiswa
    	$mahasiswa = DB::table('mahasiswa')->get();
 
    	// mengirim data mahasiswa ke view index
    	return view('index',['mahasiswa' => $mahasiswa]);
    }

    // method untuk menampilkan view form tambah mahasiswa
    public function tambah()
    {
        // memanggil view tambah
        return view('tambah');
    }

    // method untuk insert data ke table mahasiswa
    public function store(Request $request)
    {
        // insert data ke table mahasiswa
        DB::table('mahasiswa')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    // method untuk edit data mahasiswa
    public function edit($id)
    {
        // mengambil data mahasiswa berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('nim',$id)->get();
        // passing data mahasiswa yang didapat ke view edit.blade.php
        return view('edit',['mahasiswa' => $mahasiswa]);
    
    }

    public function update(Request $request)
    {
        // update data mahasiswa
        DB::table('mahasiswa')->where('nim',$request->nim)->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    // method untuk hapus data mahasiswa
    public function hapus($id)
    {
        // menghapus data mahasiswa berdasarkan id yang dipilih
        DB::table('mahasiswa')->where('nim',$id)->delete();
            
        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }
    
}
