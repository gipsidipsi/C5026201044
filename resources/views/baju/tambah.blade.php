@extends('layout.bahagia')

@section('title', 'Tambah data baju')
@section('judulhalaman', 'Menambah data baju')

@section('konten')
<head>
</head>
<body>



	<br/>
	<br/>

	<form action="/baju/store" method="post">
		{{ csrf_field() }}
		Merk Baju <input class="form-control" type="text" name="nama" required="required"> <br/>
		Stock Baju <input class="form-control" type="text" name="jabatan" required="required"> <br/>
		Tersedia <input class="form-control" type="number" name="umur" required="required"> <br/>
        <a class="btn btn-primary" href="/baju"> Kembali</a>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>

</body>
@endsection
