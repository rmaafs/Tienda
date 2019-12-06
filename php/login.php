<?php
    setcookie("user", '', time() - 1, '/');
    setcookie("pass", '', time() - 1, '/');
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script>
        function verificar(){
            if (document.getElementsByName("user")[0].value.length == 0) {
               alert("El dato Usuario no puede estar vacío.");
           } else if (document.getElementsByName("passwd")[0].value.length == 0) {
               alert("El dato Contraseña no puede estar vacío.");
           } else {
               send();
           }
        }
        
        function send(){
            var x = document.getElementById('user1').value;
            console.log(x);
            var y = document.getElementById('passwd1').value;
            console.log(y);
            document.getElementById("formLogin").submit();
        }
    </script>
</head>
<body>
   <form action="conecLogin.php" method="post" id="formLogin">
       <label for="">Ingresa al usuario:</label>
    <input type="text" name="user" required id="user1">
    <br>
    <label for="">Ingresa la contraseña:</label>
    <input type="text" name="passwd" required id="passwd1">
    <input type="button" onclick="verificar()" value="Enviar" >
    <br>
    <input type="checkbox">Recordar Usuario
   </form>
</body>
</html>

