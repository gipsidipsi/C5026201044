@extends('layout.bahagia')

@section('title', 'Mengedit data tugas')
@section('judulhalaman', 'Edit data tugas')

@section('konten')
<head>
</head>
<body>



	<br/>
	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>
		ID <input class="form-control" type="text" required="required" name="ID" value="{{ $p->ID }}"> <br/>
		IDPegawai <input class="form-control" type="text" required="required" name="IDPegawai" value="{{ $p->IDPegawai }}"> <br/>
		Tanggal <input class="form-control" type="datetime-local" required="required" name="Tanggal" value="{{ $p->Tanggal }}"> <br/>
		Status <input class="form-control" required="required" name="Status">{{ $p->Status }}</input> <br/>
        <a class="btn btn-primary" href="/tugas"> Kembali</a>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
@endsection
