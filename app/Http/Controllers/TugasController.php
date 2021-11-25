<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TugasController extends Controller
{
    public function index()
    {
        // DB::table('')->get();
    	// mengambil data dari table tugas
    	$tugas = DB::table('tugas')->get(); //hasil get() adalah array of object[object][]

    	// mengirim data tugas ke view index
    	return view('tugas.index',['tugas' => $tugas]); //teknik komunikasi / passing value antara controller dan view

    }

    // method untuk menampilkan view form tambah tugas
public function tambah()
{

	// memanggil view tambah
	return view('tugas.tambah');

}

// method untuk insert data ke table tugas
public function store(Request $request)
{
	// insert data ke table tugas
	DB::table('tugas')->insert([
		'IDPegawai' => $request->IDPegawai,
		'Tanggal' => $request->Tanggal,
		'NamaTugas' => $request->NamaTugas,
		'Status' => $request->Status
	]);
	// alihkan halaman ke halaman tugas
	return redirect('/tugas'); //tidak return view jadi tidak fleksibel

}

// method untuk edit data tugas
public function edit($id)
{
	// mengambil data tugas berdasarkan id yang dipilih
	$tugas = DB::table('tugas')->where('ID',$id)->get();
	// passing data tugas yang didapat ke view edit.blade.php
	return view('tugas.edit',['tugas' => $tugas]);

}

// update data tugas
public function update(Request $request)
{
	// update data tugas
	DB::table('tugas')->where('ID',$request->id)->update([
		'IDPegawai' => $request->IDPegawai,
		'Tanggal' => $request->Tanggal,
		'NamaTugas' => $request->NamaTugas,
		'Status' => $request->Status
	]);
	// alihkan halaman ke halaman tugas
	return redirect('/tugas');
}

// method untuk hapus data tugas
public function hapus($id)
{
	// menghapus data tugas berdasarkan id yang dipilih
	DB::table('tugas')->where('ID',$id)->delete();

	// alihkan halaman ke halaman tugas
	return redirect('/tugas');
}
}
