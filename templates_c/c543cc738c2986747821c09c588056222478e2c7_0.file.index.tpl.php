<?php
/* Smarty version 3.1.33, created on 2019-02-09 08:55:00
  from 'C:\xampp\htdocs\TPE-Web-2-Genaro\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5e87546683b1_24123756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c543cc738c2986747821c09c588056222478e2c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web-2-Genaro\\templates\\index.tpl',
      1 => 1549697805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:contenidoInicial.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c5e87546683b1_24123756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="noticias">
    <div class="container-fluid">
       <div class="row">
         <?php $_smarty_tpl->_subTemplateRender("file:contenidoInicial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
