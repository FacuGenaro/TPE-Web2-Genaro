{include file="header.tpl"}
{foreach from=$categorias item=curr_category}
 <div class="row-md-4">
   <h2><a href="#">{$curr_category['titulo_categoria']} </a>/ <a href="borrarCategoria/{$curr_category['id_categoria']}">Borrar categoria</a></li> / <a href="editarCategoria/{$curr_category['id_categoria']}">Editar categoria</a></li></h2>
</div>
{/foreach}
<div class="nuevaNoticia">
  <div class="container">
    <h2>Agregar categoria</h2>
    <form method="post" action="agregarCategoria">
      <div class="form-group">
        <label for="tituloForm">Titulo de la nueva categoria</label>
        <input type="text" class="form-control" name="tituloForm">
      </div>
      <button type="submit" class="btn btn-primary">Crear categoria</button>
    </form>
  </div>
</div>
</body>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</html>
