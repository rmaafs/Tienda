<?php
require "mysql.php";

$user = $_POST['user'];
$passwd = openssl_encrypt($_POST['passwd'], "AES-128-ECB", "123");

if (!validarCaptcha()) {//Retorna verdadero si el captcha fue resuleto correctamente
    die("Captcha erroneo");
}

//echo "Nombre: " . $user;
//echo "passwd: " . $passwd;
//  "nombre: " . $nom . " "
//  "nombre : '" . $nom .  "'  "
if (1) {
    $nom = selectBD('select usuario from login where usuario = "' . $user . '"');
    if ($nom) {
        $bloqueo = selectBD('select estado from login where usuario = "' . $user . '"');
        if ($bloqueo) {
            $b = $bloqueo->fetch_assoc();
            $b1 = $b['estado'];
            if ($b1 == 0) {
                header('Location:FormCorreo2.php');
                //echo "<br>";
                //echo "Usuario bloqueado";
            } else {
                $resultado = selectBD('select usuario, con, nombre, apellidoPat, apellidoMat from login where usuario = "' . $user . '" and con = "' . $passwd . '" ');
                if ($resultado) {
                    //echo "<br>";
                    echo "Bienvenido";

                    if (updateDB('UPDATE login set intentos = 0 where usuario = "' . $user . '"; ')) {
                        //echo "<br>";
                        //echo "se actualizo el intento el estado";
                    } else {
                        //echo "<br>";
                        //echo "Fallo al actualizar el estado";
                    }

                    session_start();
                    $fila = $resultado->fetch_assoc();
                    $_SESSION["nombre"] = $fila['nombre'];
                    $_SESSION["apellidoPat"] = $fila['apellidoPat'];
                    $_SESSION["apellidoMat"] = $fila['apellidoMat'];

                    header('Location: index.php');
                } else {
                    echo "<br>";
                    echo "Error de contraseña";
                    $num = selectBD('select intentos from login where usuario = "' . $user . '"');
                    $i = $num->fetch_assoc();
                    $n = $i['intentos'];
                    $n = $n + 1;
                    if ($n >= 3) {
                        if (updateDB('UPDATE login set estado = 0 where usuario = "' . $user . '"; ')) {
                            //echo "<br>";
                            //echo "se actualizo el intento el estado";
                        } else {
                            echo "<br>";
                            echo "Fallo al actualizar el estado";
                        }
                    }
                    echo "<br>";
                    echo $n;
                    
                    if (updateDB('UPDATE login set intentos = "' . $n . '" WHERE usuario ="' . $user . '";')) {
                        //echo "<br>";
                        //echo "se actualizo el intento";
                    } else {
                        echo "<br>";
                        echo "Fallo el actualizar el intento";
                    }header('Location:login.php');
                }
            }
        } else {
            echo "Error al recibir el estado del usuario";
        }
    } else {
        header('Location:login.php');
    }
} else {
    //header('Location:FormCorreo2.php');
}

function validarCaptcha()
{
    if (!isset($_POST["g-recaptcha-response"]) || $_POST["g-recaptcha-response"] == "") {
        //die("No has pasado el captcha correctamente.");
        header('Location:login.php');
    }
    $clave_secreta = "6Ld_FsgUAAAAAElDXz1-aXExH0myJ-ONn_RngcTA";
    $recaptcha = $_POST["g-recaptcha-response"];

    $post_data = "secret=" . $clave_secreta . "&response=" . $recaptcha . "&remoteip=" . $_SERVER['REMOTE_ADDR'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=utf-8', 'Content-Length: ' . strlen($post_data)));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    $googresp = curl_exec($ch);
    $decgoogresp = json_decode($googresp);
    curl_close($ch);
    //echo $googresp;

    return $decgoogresp->success == true;
}
