@extends('layout.bahagia')

@section('title', 'Mengedit data Baju')
@section('judulhalaman', 'Edit Data Baju')

@section('konten')
<head>
</head>
<body>


	<br/>
	<br/>

	@foreach($baju as $b)


		{{ $b->kodebaju }} <br/>
            <div class="mb-2">
            Nama {{ $b->merkbaju }} <br/>
        </div>
        <div class="mb-2">
            Jabatan {{ $b->stockbaju }} <br/>
        </div>
        <div class="mb-2">
            Umur {{ $b->tersedia }} <br/>
        </div>

        <a class="btn btn-primary" href="/pegawai"> Kembali</a>

	@endforeach


</body>
@endsection
