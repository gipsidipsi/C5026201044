<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    @media (min-width: 768px) {
  .sidebar-nav .navbar .navbar-collapse {
    padding: 0;
    max-height: none;
  }
  .sidebar-nav .navbar ul {
    float: none;
  }
  .sidebar-nav .navbar ul:not {
    display: block;
  }
  .sidebar-nav .navbar li {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
  }
  h3{
    font-size: 12px;
  }
  img{
      margin-right: 15px;
  }

}
}
</style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <img src="{{ asset('/images/Muhammad Ghiffari_5026201044.jpeg') }}" class="img-circle" alt="Foto diri" width="50" height="50">
          </div>
          <ul class="nav navbar-nav">
            <li><a href="#">Muhammad Ghiffari</a></li>
          </ul>
        </div>
      </nav>
    {{-- <div class="container">
        <nav class="navbar navbar-inverse">
        {{-- <div class="row"> --}}
        {{-- <div class="col-2"> --}}
            {{-- <img src="{{ asset('/images/Muhammad Ghiffari_5026201044.jpeg') }}" class="img-circle" alt="Foto diri" width="34" height="34">
            {{-- <div class="col-10"> --}}
            {{-- <h3>Muhammad Ghiffari
          </h3>
        </div> --}}
        {{-- </div> --}}
    {{-- </div> --}}
        {{-- </nav> --}}
    <br>
        <div class="row">
            <div class="col-sm-2 text-center" style="margin-top: 145px">
                    <div class="sidebar-nav">
                      <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <span class="visible-xs navbar-brand">Sidebar menu</span>
                        </div>
                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                          <ul class="nav navbar-nav">
                            <li><a href="/pegawai">Pegawai</a></li>
                            <li><a href="/absen">Absen</a></li>
                            <li><a href="/tugas">Tugas</a></li>
                            <li><a href="#">Minggu Depan</a></li>
                            <li><a href="#">Praktikum</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
            </div>
            <div class="col-sm-10" style="margin-top: 50px">
                <h3>@yield('judulhalaman')</h3>

                @section('konten')

                @show
            </div>

        </div>
        <footer style="bottom:0; position: fixed; left: 0; text-align: center; width: 100%; margin-bottom:10px;">
            <p>© 2021 Muhammad Ghiffari 5026201044</p>
    </div>


</body>

</html>
