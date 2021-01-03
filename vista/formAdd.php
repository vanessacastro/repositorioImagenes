
<?php
  $mysqli = new mysqli('localhost', 'root', '', 'proyecto');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Galeria Imagenes</title>

  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark px-5">
      <a class="navbar-brand">Galeria de Imagenes</a>
      <div class="form-inline">
        <a href='/html/index.php'>
          <button class="btn btn-light mr-2 my-2 my-sm-0" 
           type="submit">Home</button>
        </a>
        <a href='/html/pages/addImage.php'>
          <button class="btn btn-light my-2 my-sm-0" 
           type="submit">Add Image</button>
        </a>
      </div>
    </nav>
    <br>

    <div class="container">
      <div class='row'>
        <div class='col-md-8 card'>
          <h4 class='m-3'>Add Image</h4><hr>
          <form action='../modelo/valImagen.php' method='post' 
           class='card-body' enctype="multipart/form-data">
            <input type='text' class='form-control mb-3' 
             name='titlePost' placeholder='Title'>
            <input type='text' class='form-control mb-3' 
             name='descriptionPost' placeholder='Description'>
            <select class='form-control mb-3' name='categoriaPost'>
            <option value="0">Seleccione:</option>
        <?php
        
          $query = $mysqli -> query ("SELECT * FROM categoria");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id_categoria].'">'.$valores[nombre].'</option>';
          }
        ?>
      </select>
            
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input" 
                 id="inputGroupFile02" name='imagePost'>
                <label class="custom-file-label"
                 for="inputGroupFile02">Choose Image</label>
              </div>
            </div>
                 
            <input type='submit' class='btn btn-block btn-primary' 
             name='insertarBtn' value='Guardar'>
          </form>
        </div>
      </div>
    </div>
    <br>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <!-- Optional JavaScript -->
  <script>

  $('.custom-file-input').on('change', function(event) {
    var inputFile = event.currentTarget;
    
    $(inputFile).parent()
        .find('.custom-file-label')
        .html(inputFile.files[0].name);
  });

  </script>
  </body>
</html>