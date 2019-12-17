<?php
class Cupon {
  public $cupon;
  public $descuento;
  public $descripcion;

  public function __construct($fila) {
    if ($fila == null) return;
    $this->cupon = $fila['cupon'];
    $this->descuento = $fila['descuento'];
    $this->descripcion = $fila['descripcion'];
  }
}
