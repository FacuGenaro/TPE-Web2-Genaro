{include file="header.tpl"}
<div class="nuevaNoticia">
  <div class="container">
    <form method="post" action="{$index}/confirmarEdit">
      <div class="form-group">
        <input type="hidden" class="form-control" id="id_noticiaForm" name="id_noticiaForm" value="{$noticia['id_noticia']}">
      </div>
      <div class="form-group">
        <label for="tituloForm">Titulo</label>
        <input type="text" class="form-control" id="tituloForm" name="tituloForm" value="{$noticia['titulo']}">
      </div>
      <div class="form-group">
        <label for="descripcionForm">ContenidoPreview</label>
        <input type="text" class="form-control" id="contenidoPreview" name="contenidoPreview" value="{$noticia['contenidoPreview']}">
      </div>
      <div class="form-group">
        <label for="descripcionForm">ContenidoFull</label>
        <input type="text" class="form-control" id="contenidoFull" name="contenidoFull" value="{$noticia['contenidoFull']}">
      </div>
      <div class="form-group">
        <label for="sel1">Categoria:</label>
        <select class="form-control" id="sel1" id="categoriaForm" name="categoriaForm" value="{$noticia['categoriaForm']}">
          <option>Futbol</option>
          <option>Esports</option>
        </select>
      </div>
      <div class="form-group">
        <label for="descripcionForm">Imagen</label>
        <input type="text" class="form-control" id="imagen" name="imagen" value="{$noticia['imagen']}">
      </div>
      <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>
  </div>
</div>
</body>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
</html>
