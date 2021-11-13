<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Praktikum2</title>
</head>

<body>
    <div class="container-lg bg-dark p-5">

        <div class="form-body bg-light m-5 p-5">

            <h1 class="text-center">REGISTRATION FROM</h1>


            <form name="Praktikum2" action="/action_page.php" onsubmit="return validateForm()">



                <div class="mb-3 mt-3">
                    <label for="fullname" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Enter yourname" name="fullname">

                </div>

                <div class="mb-3 mt-3">
                    <label for="address" class="form-label">Address:</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">

                </div>

                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">

                </div>

                <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>

                <div class="mb-3 mt-3">
                    <label for="telephone" class="form-label">Telephone :</label>
                    <input type="number" class="form-control" id="telephone" placeholder="Enter your number"
                        name="telephone" pattern="[0-9]{12}">

                </div>


                <div class="course">
                    <label for="course" class="form-label">Select Your Course: </label>
                    <select class="form-select" id="course" name="course">
                        <option value="" readonly="true" hidden="true">Please Choose</option>
                        <option value="BTECH">BTECH</option>
                        <option value="BBA">BBA</option>
                        <option value="BCA">BCA</option>
                        <option value="B.COM"> B.COM</option>
                        <option value="GEEKFORGEEKS">GEEKFORGEEKS</option>
                    </select>
                </div>

                <input class="mt-3" type="reset" value="Reset">
                <input type="submit" value="Submit">


        </div>
        <script>
            function validateForm() {
                if (document.forms["Praktikum2"]["fullname"].value == "") {
                    alert("Fill your fullname");
                    document.forms["Praktikum2"]["fullname"].focus();
                    return false;
                }
                if (document.forms["Praktikum2"]["address"].value == "") {
                    alert("Fill your address");
                    document.forms["Praktikum2"]["address"].focus();
                    return false;
                }
                if (document.forms["Praktikum2"]["email"].value == "") {
                    alert("Fill your email");
                    document.forms["Praktikum2"]["email"].focus();
                    return false;
                }
                if (document.forms["Praktikum2"]["course"].selectedIndex < 1) {
                    alert("choose your course.");
                    document.forms["Praktikum2"]["course"].focus();
                    return false;
                }

                if (document.forms["Praktikum2"]["pwd"].value == "") {
                    alert("Fill your password");
                    document.forms["Praktikum2"]["pwd"].focus();
                    return false;
                }
                if (document.forms["Praktikum2"]["telephone"].value == "") {
                    alert("Fill your telephone");
                    document.forms["Praktikum2"]["telephone"].focus();
                    return false;
                }
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</body>

</html>
