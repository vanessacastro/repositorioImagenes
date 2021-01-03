<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>galeryImages</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark px-5">
      <a class="navbar-brand">Images Galery</a>
      <div class="form-inline">
        <a href='/html/index.php'>
          <button class="btn btn-light mr-2 my-2 my-sm-0" 
           type="submit">Home</button>
        </a>
        <a href='formAdd.php'>
          <button class="btn btn-light my-2 my-sm-0" 
           type="submit">Add Image</button>
        </a>
      </div>
    </nav>
    <br>

    <div class="container">
      <div class="card-columns">
        <?php
          
        include_once '../modelo/conexion.php';
        include_once '../modelo/modelo.php';
        
        $image = new Imagen();
        $rows = $image->mostrar();
        if(!empty($rows)){
          foreach($rows as $row){
        ?>
        <div class="card" data-toggle="modal" 
          data-target="#mdl<?php echo $row['id_recurso'];?>">
          <img class="card-img-top" alt="" 
          src="/html/img/<?php
          echo $row['url'];?>">
          <div class='p-3'>
            <h5><?php echo $row['nombre']; ?></h5>
            <p> <?php echo $row['descripcion']; ?></p>
            
            <a href='../pages/editImage.php?id=<?php echo $row['id_recurso']; ?>'>
          <button type="button" class="btn btn-success">
          Edit</button>
          <a href='../pages/deleteImage.php?id=<?php echo $row['id_recurso']; ?>'>
          <button type="button" class="btn btn-danger">
          Delete</button>
        </a>
        </a>
          </div>
        </div>
       
      <?php }  } ?>    
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>