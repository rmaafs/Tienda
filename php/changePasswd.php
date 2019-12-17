<?php
include_once "mysql.php";
$key = $_POST["key"];
$passwd = openssl_encrypt($_POST['passwd'], "AES-128-ECB", "123");

$resultado = selectBD('SELECT usuario FROM recuperar WHERE id = "' . $key . '" ');
if ($resultado) {
    $fila = $resultado->fetch_assoc();
    $user = $fila["usuario"];

    if (updateDB("UPDATE login SET con='$passwd' WHERE usuario='$user'")) {
        echo "Redireccionando...";
?>
        <script>
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    location.href = "login.php?s=2";
                }
            };
            xhttp.open("GET", 'eliminarKey.php?key=<?php echo $key; ?>', true);
            xhttp.send();
        </script>
<?php
                                        //header("Location: login.php?s=2");
                                    } else {
                                        //header("Location: login.php");
                                    }
                                } else {
                                    //header("Location: login.php");
                                }
