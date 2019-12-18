<!-- Chat -->
<?php include "includes/chat.php" ?>
<html>
<head>
<title>Formulario de contacto</title>
<link rel="stylesheet" href="../dist/css/estilos.css">
    <link rel="stylesheet" href="../dist/css/font-awesome.css">

    <script src="../dist/js/jquery-3.2.1.js"></script>
    <script src="../dist/js/script.js"></script>
</head>
<body>
    <section class="form_wrap">
    
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                   <h1>Contactanos</h1>
                   </section>
<section class="info_items">
  <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
</section>
</section>

<form action="envio2.php" method="POST" enctype="multipart/form-data"> <!--determinar el tipo de información-->
<div class="user_info">

<label for="names">Nombre:</label><input type="text" name="nombre" maxlength="50" placeholder="Introduce el nombre" required>

<label for="names">Apellidos:</label><input type="text" name="apellidos" maxlength="50" placeholder="Introduce tus apellidos" required>
<label for="email">Email:</label><input type="email" name="correo" placeholder="Introduce un correo valido" required >
<label>  Comentario:</label> <textarea rows="10" cols="40" name="comentario" required></textarea>
<input type="file" name="archivo">
<input type="submit" value="Enviar correo" name="submit" >

</div>
</form>
</section>
</body>
</html>