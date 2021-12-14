<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BajuController extends Controller
{
    public function index()
    {
        // DB::table('')->get();
        // mengambil data dari table baju
        // $baju = DB::table('baju')->get(); //hasil get() adalah array of object[object][]

        $baju = DB::table('baju')->paginate(5);

        // mengirim data baju ke view index
        return view('baju.index', ['baju' => $baju]); //teknik komunikasi / passing value antara controller dan view

    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table baju sesuai pencarian data
        $baju = DB::table('baju')
            ->where('merkbaju', 'like', "%" . $cari . "%")
            ->orWhere('stockbaju', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data baju ke view index
        return view('baju.index', ['baju' => $baju]);
    }
    // method untuk menampilkan view form tambah baju
    public function tambah()
    {

        // memanggil view tambah
        return view('baju.tambah');
    }

    // method untuk insert data ke table baju
    public function store(Request $request)
    {
        // insert data ke table baju
        DB::table('baju')->insert([
            'merkbaju' => $request->merkbaju,
            'stockbaju' => $request->stockbaju,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman baju
        return redirect('/baju'); //tidak return view jadi tidak fleksibel

    }

    // method untuk edit data baju
    public function edit($id)
    {
        // mengambil data baju berdasarkan id yang dipilih
        $baju = DB::table('baju')->where('kodebaju', $id)->get();
        // passing data baju yang didapat ke view edit.blade.php
        return view('baju.edit', ['baju' => $baju]);
    }


    public function detail($id)
    {
        // mengambil data baju berdasarkan id yang dipilih
        $baju = DB::table('baju')->where('kodebaju', $id)->get();
        // passing data baju yang didapat ke view edit.blade.php
        return view('baju.detail', ['baju' => $baju]);
    }

    // update data baju
    public function update(Request $request)
    {
        // update data baju
        DB::table('baju')->where('kodebaju', $request->id)->update([
            'merkbaju' => $request->merkbaju,
            // 'stockbaju' => $request->jabatan,
            // 'tersedia' => $request->umur,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman baju
        return redirect('/baju');
    }

    // method untuk hapus data baju
    public function hapus($id)
    {
        // menghapus data baju berdasarkan id yang dipilih
        DB::table('baju')->where('kodebaju', $id)->delete();

        // alihkan halaman ke halaman baju
        return redirect('/baju');
    }
}
