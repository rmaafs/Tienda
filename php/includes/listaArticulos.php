<?php
require_once "mysql.php";

$categoria = $_GET["categoria"];

$resultado = selectBD('SELECT * FROM productos_1 WHERE tipo="' . $categoria . '"');
if ($resultado) { ?>

    <style>
        .img-producto-categoria img {
            width: 160px;
            height: 160px;
        }

        .precio-producto-categoria {
            margin-top: 10px;
            height: 24px;
            line-height: 24px;
            font-size: 20px;
            color: #f30240;
        }

    </style>

    <div class="box box-default">
        <div class="box-header with-border">
            <i class="fa fa-circle-o"></i>
            <h3 class="box-title"><?php echo $categoria; ?></h3>
        </div>
        <div class="box-body">
            <div class="row">


                <?php
                                    while ($fila = $resultado->fetch_assoc()) { //Vamos a ciclar cada FILA que nos ha retornado la consulta, y se guarda en $fila
                                        $producto = new Producto($fila);
                ?>


                    <div class="col-md-2" style="text-align: center;">
                        <div class="img-producto-categoria">
                            <a href="viewProducto.php?id=<?php echo $producto->id; ?>" title="<?php echo $producto->nombre ?>">
                                <img class="zoom;" src="<?php echo $producto->imagen ?>" alt="<?php echo $producto->nombre ?>" title="<?php echo $producto->nombre ?>">
                            </a>
                        </div>
                        <h5 href="viewProducto.php?id=<?php echo $producto->id; ?>" title="<?php echo $producto->nombre ?>">
                            <a href="viewProducto.php?id=<?php echo $producto->id; ?>" class="hover-nombre" title="<?php echo $producto->nombre ?>">
                                <?php echo $producto->nombre ?>
                            </a>
                        </h5>
                        <p class="precio-producto-categoria">MXN$<?php echo $producto->precio ?></p>
                    </div>


                <?php } ?>
            </div>
        </div>
    </div>
<?php
                                                                                                                                                        }
