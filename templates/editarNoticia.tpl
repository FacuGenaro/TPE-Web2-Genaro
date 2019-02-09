{include file="header.tpl"}
<div class="nuevaNoticia">
  <div class="container">
 <h2>Formulario Edicion</h2>
 <form method="post" action="{$index}/confirmarEdit">
   <div class="form-group">
     <input type="hidden" class="form-control" name="id_noticiaForm" value="{$noticia["id_noticia"]}">
   </div>
   <div class="form-group">
     <label for="tituloForm">Titulo</label>
     <input type="text" class="form-control" name="tituloForm" value="{$noticia["titulo"]}">
   </div>
   <div class="form-group">
     <label for="descripcionForm">ContenidoPreview</label>
     <input type="text" class="form-control" name="contenidoPreview" value="{$noticia["contenidoPreview"]}">
   </div>
   <!-- <div class="form-group">
     <label for="descripcionForm">ContenidoFull</label>
     <input type="text" class="form-control" name="contenidoFull" value="{$noticia['contenidoFull']}">
   </div> -->
   <div class="form-group">
     <label for="sel1">Categoria:</label>
     <select class="form-control" id="sel1" name="categoriaForm" value="{$noticia["id_categoria"]}">
       <option>Futbol</option>
       <option>Esports</option>
     </select>
   </div>
   <div class="form-group">
     <label for="descripcionForm">Url imagen</label>
     <input type="text" class="form-control" name="imagenForm" value="{$noticia["imagen"]}">
   </div>
   <button type="submit" class="btn btn-primary">Confirmar</button>
 </form>
</div>
</div>
{include file="footer.tpl"}
