<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class karyawan1Controller extends Controller
{
    public function index()
    {
        // DB::table('')->get();
        // mengambil data dari table baju
        // $karyawan1 = DB::table('baju')->get(); //hasil get() adalah array of object[object][]

        $karyawan1 = DB::table('karyawan1')->paginate(5);

        // mengirim data baju ke view index
        return view('karyawan1.index', ['karyawan1' => $karyawan1]); //teknik komunikasi / passing value antara controller dan view

    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table baju sesuai pencarian data
        $karyawan1 = DB::table('karyawan1')
            ->where('Nama', 'like', "%" . $cari . "%")
            ->orWhere('Pangkat', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data baju ke view index
        return view('karyawan1.index', ['karyawan1' => $karyawan1]);
    }
    // method untuk menampilkan view form tambah baju

    // method untuk insert data ke table baju
    public function store(Request $request)
    {
        // insert data ke table baju
        DB::table('karyawan1')->insert([
            'NIP' => $request->nip,
            'Nama' => $request->nama,
            'Pangkat' => $request->pangkat,
            'Gaji' => $request->gaji,

        ]);
        // alihkan halaman ke halaman baju
        return redirect('/baju'); //tidak return view jadi tidak fleksibel

    }

    // method untuk edit data baju
    public function edit($id)
    {
        // mengambil data baju berdasarkan id yang dipilih
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();
        // passing data baju yang didapat ke view edit.blade.php
        return view('karyawan1.edit', ['karyawan1' => $karyawan1]);
    }


    public function detail($id)
    {
        // mengambil data baju berdasarkan id yang dipilih
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();
        // passing data baju yang didapat ke view edit.blade.php
        return view('karyawan1.detail', ['karyawan1' => $karyawan1]);
    }

    // update data baju
    public function update(Request $request)
    {
        // update data baju
        DB::table('karyawan1')->where('NIP', $request->id)->update([
            'NIP' => $request->nip,
            'Nama' => $request->nama,
            'Gaji' => $request->gaji,
            'Pangkat' => $request->pangkat
        ]);
        // alihkan halaman ke halaman baju
        return redirect('/karyawan1');
    }

    // method untuk hapus data baju
    public function hapus($id)
    {
        // menghapus data baju berdasarkan id yang dipilih
        DB::table('karyawan1')->where('NIP', $id)->delete();

        // alihkan halaman ke halaman baju
        return redirect('/karyawan1');
    }
}
