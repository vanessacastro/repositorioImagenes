<?php
class Imagen extends Conexion{
  
  public function insertar($img){
    if(isset($_POST['insertarBtn'])){
      if(empty($_POST['titlePost']) &&
       empty($_POST['descriptionPost']) && empty($_POST['imagePost'])
       && empty($_POST['categoriaPost'])){
        
        echo '<script>alert("Fill in the blanks");</script>';      
      } else {
        
        $title= $_POST['titlePost'];
        $desc= $_POST['descriptionPost'];
        $cat= $_POST['categoriaPost'];
        $image= $img->imageVal();
        
        $sql= 'INSERT INTO recurso (nombre, descripcion, 
           url, idcategoria) VALUES ("'.$title.'","'.$desc.'","'.$image.'","'.$cat.'")';
        
        $this->conectar()->query($sql);
        header('location: ../index.php');
      }
    }
  }
  
  public function mostrar(){
    $data= null;
    
    $sql= 'SELECT * FROM recurso';
    if($consulta= $this->conectar()->query($sql)){
      while($row= $consulta->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row; 
      }
    }
    return $data;
  }
  
  public function eliminar($id){
    
    $sql= 'DELETE FROM recurso WHERE id_recurso="'.$id.'"';
    $this->conectar()->query($sql);
  }

}
?>