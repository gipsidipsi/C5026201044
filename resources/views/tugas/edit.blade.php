<!DOCTYPE html>
<html>
<head>
	<title>Muhammad Ghiffari</title>
</head>
<body>

	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>
		ID <input type="text" required="required" name="ID" value="{{ $p->ID }}"> <br/>
		IDPegawai <input type="text" required="required" name="IDPegawai" value="{{ $p->IDPegawai }}"> <br/>
		Tanggal <input type="datetime-local" required="required" name="Tanggal" value="{{ $p->Tanggal }}"> <br/>
		Status <input required="required" name="Status">{{ $p->Status }}</input> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
