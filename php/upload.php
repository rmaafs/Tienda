<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //DB details
        $servidor = '34.94.76.156';
        $cuenta = 'tienda';
        $password = 'curiosoXD';
        $bd = 'tienda';
        $conexion = new mysqli($servidor, $cuenta, $password, $bd);
        if ($conexion->connect_errno) {
            die('Error en la conexion');
        }else{
            return $conexion;
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>