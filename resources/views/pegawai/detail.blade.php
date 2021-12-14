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


		{{ $p->pegawai_id }} <br/>
            <div class="mb-2">
            Nama {{ $p->pegawai_nama }} <br/>
        </div>
        <div class="mb-2">
            Jabatan {{ $p->pegawai_jabatan }} <br/>
        </div>
        <div class="mb-2">
            Umur {{ $p->pegawai_umur }} <br/>
        </div>
        <div class="mb-2">
            Alamat {{ $p->pegawai_alamat }} <br/>
        </div>

        <a class="btn btn-primary" href="/pegawai"> Kembali</a>

	@endforeach


</body>
@endsection
