{include file="headerLogueado.tpl"}
<div class="nuevaNoticia">
  <div class="container">
    <form method="post" action="{$index}/confirmarEditCategoria">
      <div class="form-group">
        <input type="hidden" class="form-control" id="id_categoriaForm" name="id_categoriaForm" value="{$categoria['id_categoria']}">
      </div>
      <div class="form-group">
        <label for="tituloForm">Titulo</label>
        <input type="text" class="form-control" id="tituloForm" name="tituloForm" value="{$categoria['titulo_categoria']}">
      </div>
      <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>
  </div>
</div>
</body>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
</html>
