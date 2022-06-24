<?php

require_once 'modelo/producto.php';
require_once 'modelo/tipoProducto.php';

$tp = new TipoProducto;
$tp->Id = 2;
$tp->Descripcion = 'Galletitas.';

$prod = new Producto;
$prod->Id = 1;
$prod->Nombre = 'Merenguitas';
$prod->Precio = 1000;
$prod->Stock = 10;
$prod->TipoProducto = $tp;

$prod->MostarDatos();