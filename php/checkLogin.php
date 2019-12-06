<?php
    if (isset($_COOKIE["user"]) && isset($_COOKIE["passwd"])) {//Si la cookie user y pass están guardadas...
        echo "Hola " . $_COOKIE['user'] . ", tu contraseña es " . $_COOKIE['passwd'];
        require "mysql.php";
        $user = $_COOKIE['user'];
        $check = selectBD('select acc from login where usuario = "' .$user . '"');
        $c1 = $check -> fetch_assoc();
        $c2 = $c1['acc'];
        echo "<br>";
        echo $c2;
        if( $c2 == 1){
            header('Location: fondo.php');
            echo "esta activo";
        }else if($c2 == 0){
            echo "funciona";
            header('Location: activar.php');
        }
        //Eliminamos la cookie
        //setcookie("user", '', time() - 1, '/');
        //setcookie("pass", '', time() - 1, '/');
    }else{
        echo "No estas en sesion";
    }
?>
