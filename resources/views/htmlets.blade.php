<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>ETS PWEB C</title>

    <style>
         body {
            background: -webkit-repeating-radial-gradient(top, #02ff6b, #86e3ce);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            justify-content: center;
            align-items: center;
            display: flex;
            min-height: 100vh;
         }

        form {
            padding: 15px 40px 40px;
        }
        b {
            font-size: 8px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="main container-lg ">

        <div class="form-body bg-light m-5 p-5 border rounded">

            <b>Muhammad Ghiffari<br>
                Ghips<br>
                5026201044</b>

            <h1 class="text-center">Form Input Peserta Vaksinasi</h1>


            <form name="ETSPWEB" action="/action_page.php" onsubmit="return submitform()">

                <div class="nama peserta mb-3 mt-3">
                    <div class="row">
                        <div class="col-4">
                            <label for="namapeserta" class="form-label">Nama Peserta</label>
                        </div>
                        <div class="col-1">
                            <p>:</p>
                        </div>
                        <div class="col-7">
                            <input type="text" id="namapeserta" class="form-control" placeholder="Enter yourname"
                                name="namapeserta">

                        </div>

                    </div>

                </div>

                <div class="mb-3 mt-3">
                    <div class="row">
                        <div class="col-4">
                            <label for="nik" class="form-label">NIK</label>
                        </div>
                        <div class="col-1">
                            <p>:</p>
                        </div>
                        <div class="col-7">
                            <input type="number" id="nik" class="form-control"
                                placeholder="Masukkan Nomor Induk Kewarganegaraan" name="nik" minlength="16"
                                maxlength="16">
                        </div>

                    </div>

                </div>

                <div class="jenisvaksin">
                    <div class="row">
                        <div class="col-4">
                            <label for="jenisvaksin" class="form-label">Jenis Vaksin: </label>
                        </div>
                        <div class="col-1">
                            <p>:</p>
                        </div>
                        <div class="col-7">
                            <select class="form-select" id="jenisvaksin" name="jenisvaksin">
                                <option value="" readonly="true" hidden="true">Jenis Vaksin</option>
                                <option value="AZ">Astrazeneca</option>
                                <option value="Sinovac">Sinovac</option>
                                <option value="Moderna">Moderna</option>
                            </select>

                        </div>
                    </div>

                </div>

                <div class="mb-3 mt-3">
                    <div class="row">
                        <div class="col-4">
                            <label for="nobatch" class="form-label">No Batch:</label>
                        </div>
                        <div class="col-1">
                            <p>:</p>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" id="nobatch" placeholder="No batch vaksin"
                                name="nobatch">

                        </div>
                    </div>

                </div>

                <div class="div d-flex justify-content-center ">
                    <button type="submit" class="btn btn-primary mx-4">Simpan</button>
                    <button type="reset" class="btn btn-success mx-4" onclick="submitform()">Riset</button>
                </div>
        </div>


    </div>
    <script>
       function submitform() {
            var namapeserta = document.getElementById("namapeserta").value;
            var nik = document.getElementById("nik").value;
            var jenisvaksin = document.getElementById("jenisvaksin").value;
            var nobatch = document.getElementById("nobatch").value;


            var cekhuruf = /^[A-Za-z\s]+$/;
            var cekangka = /^[0-9]*$/;
            var ceknobatch = /^([a-zA-Z0-9])+$/;

            if (namapeserta == '') {
                alert('Please enter your name');
            } else if (!cekhuruf.test(namapeserta)) {
                alert('Nama peserta harus dengan huruf');
                document.getElementById("namapeserta").focus();
                return false;
            } else if (document.getElementById("namapeserta").value.length < 10) {
                alert('Nama harus lebih dari sepuluh huruf');
                document.getElementById("namapeserta").focus();
                return false;
            } else if (nik == '') {
                alert('Mohon masukkan NIK');
                document.getElementById("nik").focus();
                return false;
            } else if (!cekangka.test(nik)) {
                alert('NIK hanya bisa dengan angka');
                document.getElementById("nik").focus();
                return false;
            } else if (document.getElementById("nik").value.length < 16) {
                alert('NIK harus 16 digit');
                document.getElementById("nik").focus();
                return false;
            } else if (jenisvaksin == '') {
                alert('Mohon pilih jenis vaksin!');
                document.getElementById("jenisvaksin").focus();
                return false;
            } else if (nobatch == '') {
                alert('Masukkan no batch vaksin');
                document.getElementById("tlp").focus();
                return false;
            }
            else if (!ceknobatch.test(nobatch)) {
                alert('no batch tidak dapet menggunakan selain angka dan huruf');
                document.getElementById("nobatch").focus();
                return false;
            }
            else {
                alert('Thank You for the Registration');
                // Redirecting to other page.
                window.location = "https://www.google.com/";
                document.getElementById("name").focus();
                return true;
            }

        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
