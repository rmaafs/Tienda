<?php
require_once dirname(__FILE__) . "../../Producto.php";

$productos = [];

if (isset($_COOKIE['array'])) {
    $productos = unserialize($_COOKIE['array'], ["allowed_classes" => true]);
}

$size = sizeof($productos);
?>

<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-shopping-cart"></i>
    <span class="label label-danger" id="numero-total-productos-carrito"><?php echo $size; ?></span>
</a>
<ul class="dropdown-menu">
    <input type="hidden" id="total-productos-carrito" value="<?php echo $size; ?>">
    <li class="header" id="cuantos-productos-tiene-carrito">Tienes <?php echo $size; ?> productos agregados</li>
    <li>
        <!-- inner menu: contains the actual data -->
        <ul class="menu">
            <?php
                                                                            foreach ($productos as $p) { ?>
                <li>
                    <!-- start message -->
                    <a href="#">
                        <div class="pull-left">
                            <img src="../img/<?php echo $p->imagen; ?>" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                            <?php echo $p->nombre; ?>
                        </h4>
                        <p><?php echo $p->descripcion; ?></p>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </li>
    <li class="footer"><a href="../php/carritoCompras.php">Ver carrito de compras</a></li>
</ul>