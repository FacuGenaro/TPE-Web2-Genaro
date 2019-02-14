{include file="headerVisitante.tpl"}
{foreach from=$categorias item=curr_category}
<div class="row-md-4">
  <h2><a href="{$index}/filtrarPorCategoria/{$curr_category['id_categoria']}">{$curr_category['titulo_categoria']}</h2>
  </div>
{/foreach}
</body>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
</html>
