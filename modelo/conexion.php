<?php
class Conexion {
  
  private $host, $Huser, $Hpass, $db, $charset;
   
  /*public function __construct() {
    $dbArray= include_once 'config/db.php';
    $this->host=$dbArray['host'];
    $this->Huser=$dbArray['Huser'];
    $this->Hpass=$dbArray['Hpass'];
    $this->db=$dbArray['database'];
    $this->charset=$dbArray['charset'];
  }*/
  public function __construct() {
    $this->host= 'localhost';
    $this->Huser= 'root';
    $this->Hpass= '';
    $this->db= 'proyecto';
    $this->charset= 'utf8';
  }
   
  public function conectar(){
    try {
      $connection="mysql:host=".$this->host.";dbname=".
                  $this->db.";charset=".$this->charset;
      
      $con=new PDO($connection,$this->Huser,$this->Hpass);
      
      $con->setAttribute(PDO::ATTR_ERRMODE, 
                       PDO::ERRMODE_EXCEPTION);
      
    }catch(Exception $e){
      echo 'Error PDO: '.$e->getLine();
    }
         
    return $con;
  }
  
}
?>