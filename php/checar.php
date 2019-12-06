<?php
    if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"]) {//Si la cookie user y pass están guardadas...
        echo "Hola " . $_COOKIE['user'] . ", tu contraseña es " . $_COOKIE['pass'];
        //Eliminamos la cookie
        setcookie("user", '', time() - 1, '/');
        setcookie("pass", '', time() - 1, '/');
    }
    if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"]) {//Si la cookie user y pass están guardadas...
        echo "Hola " . $_COOKIE['user'] . ", tu contraseña es " . $_COOKIE['pass'];
        //Eliminamos la cookie
        setcookie("user", '', time() - 1, '/');
        setcookie("pass", '', time() - 1, '/');
    }
?>