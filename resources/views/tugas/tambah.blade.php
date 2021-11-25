<!DOCTYPE html>
<html>
<head>
	<title>Muhammad Ghiffari</title>
</head>
<body>


	<h3>Data Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		ID <input type="text" name="ID" required="required"> <br/>
		IDPegawai <input type="text" name="IDPegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="Tanggal" required="required"> <br/>
		NamaTugas <input name="NamaTugas" required="required"></input> <br/>
        Status <input name="Status" required="required"></input> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
