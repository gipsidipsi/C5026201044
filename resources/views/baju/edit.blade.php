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
            Merk Baju <input class="form-control" type="text" required="required" name="nama" value="{{ $b->merkbaju }}"> <br/>
        </div>
        <div class="mb-2">
            Stock Baju <input class="form-control" type="text" required="required" name="jabatan" value="{{ $b->stockbaju }}"> <br/>
        </div>
        <div class="mb-2">
            Tersedia <input class="form-control" type="number" required="required" name="umur" value="{{ $b->tersedia }}"> <br/>
        </div>

        <a class="btn btn-primary" href="/baju"> Kembali</a>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
@endsection
