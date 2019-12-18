<?php
require "mysql.php";

$user = $_POST['user'];
$passwd = openssl_encrypt($_POST['passwd'], "AES-128-ECB", "123");

if (!validarCaptcha()) { //Retorna verdadero si el captcha fue resuleto correctamente
    header('Location: login.php?s=3'); //Captcha incorrecto
    die();
}

$nom = selectBD('select usuario from login where usuario = "' . $user . '"');
if ($nom) {
    $bloqueo = selectBD('select estado from login where usuario = "' . $user . '"');
    if ($bloqueo) {
        $b = $bloqueo->fetch_assoc();
        $b1 = $b['estado'];
        if ($b1 == 0) {
            header('Location: login.php?s=4'); //Usuario bloqueado
            //echo "<br>";
            //echo "Usuario bloqueado";
        } else {
            $resultado = selectBD('select b.usuario, b.con, b.nombre, b.apellidoPat, b.apellidoMat, a.color, a.letra from login b LEFT JOIN accesibilidad a ON a.usuario = b.usuario where b.usuario = "' . $user . '" and b.con = "' . $passwd . '" ');
            if ($resultado) {
                //echo "<br>";
                //echo "Bienvenido";

                if (updateDB('UPDATE login set intentos = 0 where usuario = "' . $user . '"; ')) {
                    //echo "<br>";
                    //echo "se actualizo el intento el estado";
                } else {
                    //echo "<br>";
                    //echo "Fallo al actualizar el estado";
                }
                //Lo de la sesion
                setcookie('user', $user, time() + (86400 * 30 * 24), "/");
                setcookie('con', $_POST['passwd'], time() + (86400 * 30 * 24), "/");
                //Puse esto, porque $passwd está encriptada

                session_start();
                $fila = $resultado->fetch_assoc();
                $_SESSION["usuario"] = $fila['usuario']; //la necesito para validar en el nav y enseñar a y b de prod
                $_SESSION["nombre"] = $fila['nombre'];
                $_SESSION["apellidoPat"] = $fila['apellidoPat'];
                $_SESSION["apellidoMat"] = $fila['apellidoMat'];

                if (isset($fila['color'])) { //

                    setcookie('colorFondo', $fila['color'], time() + (86400 * 30 * 24), "/");
                    setcookie('tamanoLetra', $fila['letra'], time() + (86400 * 30 * 24), "/");
                }

                header('Location: index.php?s=1'); //Bienvenido
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
                        //echo "<br>";
                        //echo "Fallo al actualizar el estado";
                    }
                }
                echo "<br>";
                echo $n;

                if (updateDB('UPDATE login set intentos = "' . $n . '" WHERE usuario ="' . $user . '";')) {
                    //echo "<br>";
                    //echo "se actualizo el intento";
                } else {
                    //echo "<br>";
                    //echo "Fallo el actualizar el intento";
                }

                header('Location:login.php?s=5'); //Contraseña incorrecta
            }
        }
    } else {
        header('Location:login.php?s=6'); //Error al recibir el estado del usuario
    }
} else {
    header('Location:login.php?s=7'); //El usuario no existe
}

function validarCaptcha()
{
    if (!isset($_POST["g-recaptcha-response"]) || $_POST["g-recaptcha-response"] == "") {
        //die("No has pasado el captcha correctamente.");
        return false;
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
