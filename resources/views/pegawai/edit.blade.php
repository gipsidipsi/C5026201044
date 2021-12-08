@extends('layout.bahagia')

@section('title', 'Mengedit data pegawai')
@section('judulhalaman', 'Edit Pegawai')

@section('konten')
<head>
</head>
<body>




	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
            <div class="mb-2">
            Nama <input class="form-control" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
        </div>
        <div class="mb-2">
            Jabatan <input class="form-control" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
        </div>
        <div class="mb-2">
            Umur <input class="form-control" type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
        </div>
        <div class="mb-2">
            Alamat <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
        </div>

        <a class="btn btn-primary" href="/pegawai"> Kembali</a>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
@endsection
