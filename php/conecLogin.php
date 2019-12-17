<?php
require "mysql.php";

$user = $_POST['user'];
$passwd = openssl_encrypt($_POST['passwd'], "AES-128-ECB", "123");

if (!validarCaptcha()) {
    die("Captcha erroneo");
} else {
    die("BIEN");
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
                echo "<br>";
                echo "Usuario bloqueado";
            } else {
                $resultado = selectBD('select usuario, con, nombre, apellidoPat, apellidoMat from login where usuario = "' . $user . '" and con = "' . $passwd . '" ');
                if ($resultado) {
                    //echo "<br>";
                    echo "Bienvenido";
                    setcookie("user", $user, time() + (86400 * 1200), "/"); //Guardamos la cookie pass
                    setcookie("passwd", $passwd, time() + (86400 * 1200), "/"); //Guardamos la cookie pass


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

                    header('Location: checkLogin.php');
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
                    }
                }
            }
        } else {
            echo "Error al recibir el estado del usuario";
        }
    } else {
        echo "El usuario no existe ";
    }
} else {
    echo "Error de Captcha";
}

function validarCaptcha()
{
    if (!isset($_POST["g-recaptcha-response"])) {
        die("No has pasado el captcha correctamente.");
    }
    $clave_secreta = "6Ld_FsgUAAAAAElDXz1-aXExH0myJ-ONn_RngcTA";
    $recaptcha = $_POST["g-recaptcha-response"];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => $clave_secreta,
        'response' => $recaptcha
    );
    $options = array(
        'https' => array(
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success = json_decode($verify);
    echo $captcha_success->success . " - " . $verify;
    return $captcha_success->success;
}
