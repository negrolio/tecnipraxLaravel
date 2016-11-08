<?php

// esto era un ejemplo para hacer una clase aislada que no venga de una base de dato, por ahora lo dejo

namespace App\Items\Product;

class Producto
{
  public $name;
  public $img;
  public $texto;
  function __construct($name,$img,$texto)
  {
    $this->name = $name;
    $this->img = $img;
    $this->texto = $texto;
  }

}

 ?>
