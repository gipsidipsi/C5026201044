@extends('layout.bahagia')

@section('title', 'Data Baju')
@section('judulhalaman', 'Daftar Baju')

@section('konten')
<head>
</head>
<body>



    <div class="row">
        <div class="col-sm-2">
            <a class="btn btn-success" href="/baju/tambah">Tambah Baju Baru</a>
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-6">
                <form action="/baju/cari" method="GET">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
                    </div>
                    <div class="col-sm-2">
                        <input type="submit" class="btn btn-secondary" value="CARI">
                    </div>

                </form>
        </div>
    </div>
	<br/>
	<br/>

        <table class="table table-bordered table-responsive-sm table-striped" >
		<tr>

			<th>Merk Baju</th>
			<th>Stock Baju</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($baju as $b)
		<tr>

			<td>{{ $b->merkbaju }}</td>
			<td>{{ $b->stockbaju }}</td>
			<td>{{ $b->tersedia }}</td>
			<td>
                <a class="btn btn-info" href="/baju/view/{{ $b->kodebaju }}">View Detail</a>
                |
				<a class="btn btn-warning" href="/baju/edit/{{ $b->kodebaju }}">Edit Data</a>
				|
				<a class="btn btn-danger" href="/baju/hapus/{{ $b->kodebaju }}">Delete Data</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $baju->links() }}
    {{-- <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p> --}}

</body>
@endsection
