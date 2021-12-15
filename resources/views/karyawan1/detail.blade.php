@extends('layout.bahagia')

@section('title', 'Mengedit data Baju')
@section('judulhalaman', 'Edit Data Baju')

@section('konten')
<head>
    <style>
        body .row .col-sm-2{
            color: black;
        }
    </style>
</head>
<body>


	<br/>
	<br/>

	@foreach($karyawan1 as $p)

    <div class="row mt2">
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                NIP
            </div>
        </div>
        <div  class="col-sm-2">
            <div style="color: black;" class="label">
                :
            </div>
        </div>
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                {{$p->NIP}}
            </div>
        </div>
    </div>


    <div class="row mt2">
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                Nama
            </div>
        </div>
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                :
            </div>
        </div>
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                {{ $p->Nama }}
            </div>
        </div>
    </div>


    <div class="row mt2">
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                Pangkat
            </div>
        </div>
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                :
            </div>
        </div>
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                {{ $p->Pangkat }}
            </div>
        </div>
    </div>


    <div class="row mt2">
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                Gaji
            </div>
        </div>
        <div style="color: black;" class="col-sm-2">
            <div style="color: black;" class="label">
                :
            </div>
        </div>
        <div style="color: black;" class="col-sm-2">
            <div style="color: black;" class="label">
                {{ number_format($p->Gaji, 0, ',', '.') }}
            </div>
        </div>
    </div>

        <a class="btn btn-primary" href="/karyawan1"> Kembali</a>

	@endforeach


</body>
@endsection
