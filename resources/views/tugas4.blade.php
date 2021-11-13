<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Luas Segitiga</title>
    <script type="text/javascript">
      var area = (base * height) / 2;
      console.log("Base: " + base + "height: " + height + "area: " + area);
      function getInputValue() {
        const alas = document.getElementById("base").value;
        const tinggi = document.getElementById("height").value;
        const luas = (alas * tinggi) / 2;
        document.getElementById("luas").innerHTML = luas;
      }
    </script>
  </head>
  <body>
    <form action="/action_page.php">
      <label for="base">Alas:</label>
      <input type="text" id="base" name="base" /><br /><br />
      <label for="height">Tinggi:</label>
      <input type="text" id="height" name="height" /><br /><br />
      <button type="button" onclick="getInputValue();">Click Me!</button>
    </form>

    <p id="luas">Luas</p>
  </body>
</html>
