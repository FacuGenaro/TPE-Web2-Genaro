    <?php
    require_once "PDO.php";

    function getIndex(){
     $titulo = "NOTICIAS DEPORTES";
    ?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php echo $titulo ?></title>
    </head>
    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <a class="navbar-brand" href="pagina.html"><?php echo $titulo ?></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categorias
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="categoriafutbol.html">Futbol</a>
                  <a class="dropdown-item" href="categoriaesports.html">E-Sports</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <div class="noticias">
        <div class="container-fluid">
           <div class="row">
            <?php
             foreach(getNoticias() as $noticia){
             echo ' <div class="row-md-4"> ';
             echo ' <h2>'.$noticia['titulo'].' - <a href="borrar/ ' .$noticia['id_noticia'] .'">Borrar noticia</a></li> / <a href="editar/ ' .$noticia['id_noticia'] .'">Editar noticia</a></li></h2>' ;
             echo ' <h5> Categoria: '. $noticia['id_categoria'] .' </h5>';
             echo ' <div class="imagennoticia">';
             echo ' <img src='. $noticia['imagen'] .' alt="">';
             echo ' </div> ';
             echo ' <p>' .$noticia['contenidoPreview'] .'</p>';
          //   echo '<p><a class="btn btn-secondary" href="ampliar/' .$noticia['contenidoFull'] .' /' .$noticia['titulo'] .' /' .$noticia['imagen'] .' /" role="button">Mas información</a></p>';
             echo '</div>';
           }
            ?>
           </div>
    </div>

    <div class="nuevaNoticia">
      <div class="container">
     <h2>Formulario</h2>
     <form method="post" action="agregar">
       <div class="form-group">
         <label for="tituloForm">Titulo</label>
         <input type="text" class="form-control" name="tituloForm">
       </div>
       <div class="form-group">
         <label for="descripcionForm">ContenidoPreview</label>
         <input type="text" class="form-control" name="contenidoPreview">
       </div>
       <div class="form-group">
         <label for="descripcionForm">ContenidoFull</label>
         <input type="text" class="form-control" name="contenidoFull">
       </div>
       <div class="form-group">
         <label for="sel1">Categorias:</label>
         <select class="form-control" id="sel1" name="categoriaForm">
           <option>Futbol</option>
           <option>Esports</option>
         </select>
       </div>
       <div class="form-group">
         <label for="descripcionForm">Url imagen</label>
         <input type="text" class="form-control" name="imagenForm">
       </div>
       <button type="submit" class="btn btn-primary">Crear Noticia</button>
     </form>
   </div>

      <!-- <footer class="page-footer font-small special-color-dark pt-4 fixed-bottom">
        <div class="container">
          <p class="contenidofooter">© 2019 - Facundo Genaro.</p>
        </div>
      </footer> -->
    </body>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    </html>

    <?php
    }
     ?>
