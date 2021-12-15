@extends('layout.bahagia')

@section('title', 'Mengedit data karyawan1')
@section('judulhalaman', 'Edit karyawan1')

@section('konten')
<head>
</head>
<body>


	<br/>
	<br/>

	@foreach($karyawan1 as $p)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}

            <div class="mb-2">
            NIP <input class="form-control" type="text" required="required" name="nip" value="{{ $p->NIP }}"> <br/>
        </div>
        <div class="mb-2">
            Nama <input class="form-control" type="text" required="required" name="nama" value="{{ $p->Nama }}"> <br/>
        </div>
        <div class="mb-2">
            Pangkat <input class="form-control" type="text" required="required" name="pangkat" value="{{ $p->Pangkat }}"> <br/>
        </div>
        <div class="mb-2">
            Gaji <input class="form-control" type="number" required="required" name="gaji" value="{{ $p->Gaji }}"> <br/>
        </div>

        <a class="btn btn-primary" href="/karyawan1"> Kembali</a>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
@endsection
