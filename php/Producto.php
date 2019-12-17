<?php
class Producto {
  public $id;
  public $nombre;
  public $descripcion;
  public $unidades = 1;
  public $precio;
  public $imagen;
  public $existencias;
  public $tipo;

  public function __construct($fila) {
    if ($fila == null) return;
    $this->id = $fila['id'];
    $this->imagen = $fila['imagen'];
    $this->nombre = $fila['nombre'];
    $this->precio = $fila['precio'];
    $this->tipo = $fila['tipo'];
    $this->descripcion = $fila['descripcion'];
    $this->existencias = $fila['Cantidad'];
  }
}
