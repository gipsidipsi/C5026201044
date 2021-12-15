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
		Merk Baju <input class="form-control" type="text" name="merkbaju" required="required"> <br/>
		Stock Baju <input class="form-control" type="text" name="stockbaju" required="required"> <br/>
        Tersedia <br />
        <input type="radio" id="html" name="tersedia" value="Y">
        <label for="html">Tersedia</label>
        <input type="radio" id="css" name="tersedia" value="T" checked="checked">
        <label for="css">Kosong</label>
<br>
        <a class="btn btn-primary" href="/baju"> Kembali</a>
        <input class="btn btn-success" type="submit" value="Simpan Data">
	</form>

</body>
@endsection
