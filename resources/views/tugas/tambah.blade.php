@extends('layout.bahagia')

@section('title', 'Menambah tugas')
@section('judulhalaman', 'Menambah data tugas')

@section('konten')
<head>
</head>
<body>


	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input class="form-control" type="text" name="IDPegawai" required="required"> <br/>
		Tanggal <input class="form-control" type="datetime-local" name="Tanggal" required="required"> <br/>
		NamaTugas <input class="form-control" name="NamaTugas" required="required"></input> <br/>
        Status <input class="form-control" name="Status" required="required"></input> <br/>
        <a class="btn btn-primary" href="/tugas"> Kembali</a>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>

</body>
@endsection
