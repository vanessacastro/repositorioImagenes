<?php


  include_once '../modelo/subirImagen.php';    

  include_once '../modelo/conexion.php';

  include_once '../modelo/modelo.php';
  
  $parImg= new ImageVal();
  
  $imageIns= new Imagen();
  $imageIns->insertar($parImg);

?>