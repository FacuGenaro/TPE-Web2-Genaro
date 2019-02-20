{include file="headerVisitante.tpl"}
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
</body>
<script src="../js/visitante.js"></script>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
</html>
