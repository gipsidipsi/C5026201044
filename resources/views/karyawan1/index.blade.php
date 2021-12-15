@extends('layout.bahagia')

@section('title', 'Data karyawan1')
@section('judulhalaman', 'Daftar karyawan1')

@section('konten')
<head>
</head>
<body>


	<br/>
	<br/>




	<table class="table table-bordered table-responsive-sm table-striped" >
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th width="20%">Gaji</th>
		</tr>
		@foreach($karyawan1 as $p)
		<tr>
			<td>{{ $p->NIP }}</td>
			<td>{{ $p->Nama }}</td>
			<td>{{ $p->Pangkat }}</td>
			<td>{{ number_format($p->Gaji, 0, ',', '.') }}</td>
			<td>
				<a class="btn btn-info" href="/karyawan1/view/{{ $p->NIP }}">View</a>

                <a class="btn btn-warning" href="/karyawan1/edit/{{ $p->NIP }}">Edit</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $karyawan1->links() }}


</body>
@endsection
