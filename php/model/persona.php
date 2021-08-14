<?php
  class Cliente
  {
      public $nombre;
      public $apellido;
      public $direccion;
  
      public function __construct($nombre, $apellido,$direccion)
      {
          $this->nombre = $nombre;
          $this->apellido = $apellido;
          $this->direccion = $direccion;
      }
  }


?>