@extends('layout.bahagia')

@section('title', 'Mengedit data pegawai')
@section('judulhalaman', 'Edit Pegawai')

@section('konten')
<head>
</head>
<body>


	<br/>
	<br/>

	@foreach($baju as $b)
	<form action="/baju/update" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $b->kodebaju }}"> <br/>
            <div class="mb-2">
            Merk Baju <input class="form-control" type="text" required="required" name="merkbaju" value="{{ $b->merkbaju }}"> <br/>
        </div>
        <div class="mb-2">
            Stock Baju <input class="form-control" type="text" required="required" name="stockbaju" value="{{ $b->stockbaju }}"> <br/>
        </div>
        Tersedia <br/>
        <input type="radio" id="html" name="tersedia" value="Y">
        <label for="html">Tersedia</label>
        <input type="radio" id="css" name="tersedia" value="T" checked="checked">
        <label for="css">Kosong</label>
        <br>

        <a class="btn btn-primary" href="/baju"> Kembali</a>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
@endsection
