
   @extends('layout.bahagia')

   @section('title', 'Menambah Absen')
   @section('judulhalaman', 'Menambah Data Absen')

   @section('konten')
    <form action="/absen/store" method="post">
        {{ csrf_field() }}

        IDPegawai <select class="form-control" name="idpegawai" >
    @foreach($pegawai as $p)
     <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
    @endforeach
</select>
<br>
        <div class="form-group">
            <label for="dtpickerdemo" class="">Tanggal :</label>
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" required="required" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <script type="text/javascript">
            $(function() {
                $('#dtpickerdemo').datetimepicker({
                    format: 'YYYY-MM-DD hh:mm:ss',
                    showTodayButton: false,
                    locale : 'id',
                    "defaultDate": new Date(),
                });
            });
        </script>

            Status <br />
            <input type="radio" id="html" name="status" value="I">
            <label for="html">Izin</label>
            <input type="radio" id="css" name="status" value="S" checked="checked">
            <label for="css">Sakit</label>
            <input type="radio" id="javascript" name="status" value="A">
            <label for="javascript">Alpha</label>

        <div class="d-flex">
            <a class="btn btn-primary" href="/absen"> Kembali</a>
        <input class="btn btn-success" type="submit" value="Simpan Data">
    </div>
    </form>

@endsection
