{include file="headerUsuario.tpl"}
<div class="row-md-4">
  <h2>{$noticia['titulo']}</h2>
  <h5> Categoria: {$noticia['titulo_categoria']} </h5>
  <div class="imagennoticia">
    <img src= "{$noticia['imagen']}" alt="">
  </div>
  <p>{$noticia['contenidoFull']} </p>
</div>
<div id="comentarios-container">


</div>
<form method="post" action="" id="form">
  <div class="form-group">
    <input type="hidden" class="form-control" id="id_noticiaForm" name="id_noticiaForm" value="{$noticia['id_noticia']}">
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control" id="usuarioForm" name="usuarioForm" value="{$usuario}">
  </div>
  <div class="form-group">
    <label for="puntaje">Puntaje noticia</label>
    <select class="form-control" id="puntaje" name="puntaje">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="comment">Comentario:</label>
    <textarea class="form-control" rows="5" id="comentario" name="comentario"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Comentar</button>
</form>
</body>
<script src="../js/usuario.js"></script>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
</html>
