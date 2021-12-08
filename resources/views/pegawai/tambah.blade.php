@extends('layout.bahagia')

@section('title', 'Tambah data pegawai')
@section('judulhalaman', 'Menambah data pegawai')

@section('konten')
<head>
</head>
<body>



	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input class="form-control" type="text" name="nama" required="required"> <br/>
		Jabatan <input class="form-control" type="text" name="jabatan" required="required"> <br/>
		Umur <input class="form-control" type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" class="form-control" required="required"></textarea> <br/>
        <a class="btn btn-primary" href="/pegawai"> Kembali</a>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>

</body>
@endsection
