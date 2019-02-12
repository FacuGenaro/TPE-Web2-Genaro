{include file="header.tpl"}
<div class="noticias">
  <div class="container-fluid">
    <div class="row">
      {include file="contenidoInicial.tpl"}
    </div>
  </div>
  <div class="nuevaNoticia">
    <div class="container">
      <h2>Agregar noticia</h2>
      <form method="post" action="agregarNoticia">
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
          <label for="descripcionForm">URL imagen</label>
          <input type="text" class="form-control" name="imagenForm">
        </div>
        <button type="submit" class="btn btn-primary">Crear Noticia</button>
      </form>
    </div>
  </div>
</body>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
</html>
