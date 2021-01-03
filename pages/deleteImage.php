<?php

  include_once '../modelo/conexion.php';
  include_once '../modelo/modelo.php';
  
  $id= $_GET['id'];
  $image = new Imagen();
  $image->eliminar($id);
  
  header('location: ../vista/view.php');
  
?>