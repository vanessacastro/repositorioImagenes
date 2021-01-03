<?php

class ImageVal {
  
  public function imageVal(){
    
    $name= $_FILES['imagePost']['name'];
    $type= $_FILES['imagePost']['type'];  
    $size= $_FILES['imagePost']['size'];
    //Discoduro/xampp/htdocs/html/imagesRecop/
    $fold= '/html/img/';
  
    if($size<=3400000){
    
      if($type=='image/jpeg' || $type=='image/jpg' || 
         $type=='image/png' || $type=='image/gif'){
       
        $destino= $_SERVER['DOCUMENT_ROOT']. $fold;
    
        move_uploaded_file($_FILES['imagePost']['tmp_name'],                            
                         $destino. $name);
        return $name;
        
      } else {
        header('location: ../pages/addImage.php');
      }
    } else {
      header('location: ../pages/addImage.php');
    }
  
  }

}


?>
