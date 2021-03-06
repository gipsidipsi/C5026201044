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

	@foreach($baju as $b)

    <div class="row mt2">
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                Kode Baju
            </div>
        </div>
        <div  class="col-sm-2">
            <div style="color: black;" class="label">
                :
            </div>
        </div>
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                {{$b->kodebaju}}
            </div>
        </div>
    </div>


    <div class="row mt2">
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                Merk Baju
            </div>
        </div>
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                :
            </div>
        </div>
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                {{ $b->merkbaju }}
            </div>
        </div>
    </div>


    <div class="row mt2">
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                Stock Baju
            </div>
        </div>
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                :
            </div>
        </div>
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                {{ $b->stockbaju }}
            </div>
        </div>
    </div>


    <div class="row mt2">
        <div class="col-sm-2">
            <div style="color: black;" class="label">
                Tersedia
            </div>
        </div>
        <div style="color: black;" class="col-sm-2">
            <div style="color: black;" class="label">
                :
            </div>
        </div>
        <div style="color: black;" class="col-sm-2">
            <div style="color: black;" class="label">
                {{ $b->tersedia }}
            </div>
        </div>
    </div>

        <a class="btn btn-primary" href="/pegawai"> Kembali</a>

	@endforeach


</body>
@endsection
