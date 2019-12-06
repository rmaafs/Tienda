<?php
    require "mysql.php";

    $user = $_POST['user'];
    $passwd = $_POST['passwd'];

    //echo "Nombre: " . $user;
    //echo "passwd: " . $passwd;
    //  "nombre: " . $nom . " "
    //  "nombre : '" . $nom .  "'  "
    $nom = selectBD('select usuario from login where usuario = "' .$user . '"');
    if($nom){
        $bloqueo = selectBD('select estado from login where usuario = "' .$user . '"');
        if($bloqueo){
            $b = $bloqueo -> fetch_assoc();
            $b1 = $b['estado'];
            if($b1 == 0){
                echo "<br>";
                echo "Usuario bloqueado";
            }else{
                $resultado = selectBD('select usuario, con from login where usuario = "' . $user . '" and con = "'.$passwd.'" ');
                if( $resultado){
                    //echo "<br>";
                    echo "Bienvenido";
                    setcookie("user", $user, time() + (86400 * 1200), "/");//Guardamos la cookie pass
                    setcookie("passwd", $passwd, time() + (86400 * 1200), "/");//Guardamos la cookie pass


                    if(updateDB('UPDATE login set intentos = 0 where usuario = "' . $user . '"; ')){
                        //echo "<br>";
                        //echo "se actualizo el intento el estado";
                    }else{
                        //echo "<br>";
                        //echo "Fallo al actualizar el estado";
                    }
                    header('Location: checkLogin.php');
                }else{
                    echo "<br>";
                    echo "Error de contraseña";
                    $num = selectBD('select intentos from login where usuario = "' .$user . '"');
                    $i = $num ->fetch_assoc();
                    $n = $i['intentos'];
                    $n = $n + 1;
                    if($n >= 3){
                        if(updateDB('UPDATE login set estado = 0 where usuario = "' . $user . '"; ')){
                            //echo "<br>";
                            //echo "se actualizo el intento el estado";
                        }else{
                            echo "<br>";
                            echo "Fallo al actualizar el estado";
                        }
                    }
                    echo "<br>";
                    echo $n;
                    if(updateDB('UPDATE login set intentos = "'. $n . '" WHERE usuario ="' . $user . '";')){
                        //echo "<br>";
                        //echo "se actualizo el intento";
                    }else{
                        echo "<br>";
                        echo "Fallo el actualizar el intento";
                    }
                }
            }
        }else{
            echo "Error al recibir el estado del usuario";
        }
        
    }else{
        echo "El usuario no existe ";
    }
?>