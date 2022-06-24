<?php
require_once 'modelo/tipoProducto.php';

class Producto
{
    public $Id;
    public $Nombre;
    public $Precio;
    public $Stock;
    public $TipoProducto;

    public function MostarDatos()
    {
        echo 'Id:' . $this->Id . '<br>';
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Precio: ' . $this->Precio . '.' .  '<br>';
        echo 'Stock: ' . $this->Stock . '.' . '<br>';        
        echo 'id:' . $this->TipoProducto->Id . '<br>';
        echo 'Descripcion:' . $this->TipoProducto->Descripcion . '<br>';
    }
}
