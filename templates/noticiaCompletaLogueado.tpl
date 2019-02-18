{include file="headerLogueado.tpl"}
<div class="row-md-4">
  <h2>{$noticia['titulo']} / <a href="{$index}/borrar/{$noticia['id_noticia']}">Borrar noticia</a></li> / <a href="{$index}/editar/{$noticia['id_noticia']}">Editar noticia</a></li></h2>
  <h5> Categoria: {$noticia['titulo_categoria']} / <a href="{$index}/borrarImagen/{$noticia['id_noticia']}">Borrar imagen</a></h5>
  <div class="imagennoticia">
    <img src= "{$noticia['imagen']}" alt="">
  </div>
  <p>{$noticia['contenidoFull']} </p>
</div>
<form method="post" action="{$index}/api/comentario/post">
  <div class="form-group">
    <input type="hidden" class="form-control" id="id_noticiaForm" name="id_noticiaForm" value="{$noticia['id_noticia']}">
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control" id="id_usuarioForm" name="id_usuarioForm" value="{$id_usuario}">
  </div>
  <div class="form-group">
    <label for="puntaje">Puntaje noticia</label>
    <select class="form-control" id="sel1" name="puntaje">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="comment">Comentario:</label>
    <textarea class="form-control" rows="5" id="comment" name="comentario"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Comentar</button>
</form>
</body>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
</html>
