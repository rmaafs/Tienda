<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de accesibilidad</title>
    <script>
        function verificar(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
            }
            };
            xhttp.open("GET", "crearCookies.php", true);
            xhttp.send();
            location.href="fondo.php";
        }
    </script>

</head>
<body>
        <button onclick="verificar()"><img src="acc.png" alt="" width="240px" height="240px"></button>
        <div id="demo"></div>
</body>
</html>