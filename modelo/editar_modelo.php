<?php
class ImagenEdit extends Conexion{

  public function select($id){
    $data= null;
    
    $sql= 'SELECT * FROM recurso WHERE id_recurso="'.$id.'"';
    if($consulta= $this->conectar()->query($sql)){
      while($row= $consulta->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row; 
      }
    }
    return $data;
  }
  
  public function update($id){
    if(isset($_POST['editarBtn'])){
      if(empty($_POST['titlePostEdit']) && 
         empty($_POST['descriptionPostEdit'])&& empty($_POST['categoriaPost'])){

        echo '<script>alert("Fill in the blanks");</script>';      
      } else {
        
        $title= $_POST['titlePostEdit'];
        $desc= $_POST['descriptionPostEdit'];
          $cat= $_POST['categoriaPost'];
        
        $sql= 'UPDATE recurso SET nombre = "'.$title.'", 
              descripcion= "'.$desc.'", idcategoria="'.$cat.'" WHERE id_recurso = "'.$id.'"';
        $this->conectar()->query($sql);
        header('location: ../index.php');
      }
    }
  
  }
}