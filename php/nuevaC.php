<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../dist/css/estilos.css">
    <link rel="stylesheet" href="../dist/css/font-awesome.css">

    <script src="../dist/js/jquery-3.2.1.js"></script>
    <script src="../dist/js/script.js"></script>
    <title>Document</title>
</head>

<body>

    <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
            </section>
        </section>

        <form action="actualizar.php" method="post" class="form_contact">
            <h2>Ingresa la nueva contraseña</h2>
            <div class="user_info">
                <label for="names">Usuario *</label>
                <input type="text" id="names" name="nom" required>

                <label for="email">nueva contraseña *</label>
                <input type="text" id="email" name="con" required>

                <input type="submit" value="Enviar Mensaje" id="btnSend">
            </div>
        </form>

    </section>

</body>

</html>