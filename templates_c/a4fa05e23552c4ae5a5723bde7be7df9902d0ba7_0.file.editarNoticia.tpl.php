<?php
/* Smarty version 3.1.33, created on 2019-02-09 08:45:37
  from 'C:\xampp\htdocs\TPE-Web-2-Genaro\templates\editarNoticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5e8521739d07_98980296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4fa05e23552c4ae5a5723bde7be7df9902d0ba7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web-2-Genaro\\templates\\editarNoticia.tpl',
      1 => 1549698076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c5e8521739d07_98980296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="nuevaNoticia">
  <div class="container">
 <h2>Formulario Edicion</h2>
 <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
/confirmarEdit">
   <div class="form-group">
     <input type="hidden" class="form-control" name="id_noticiaForm" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value["id_noticia"];?>
">
   </div>
   <div class="form-group">
     <label for="tituloForm">Titulo</label>
     <input type="text" class="form-control" name="tituloForm" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value["titulo"];?>
">
   </div>
   <div class="form-group">
     <label for="descripcionForm">ContenidoPreview</label>
     <input type="text" class="form-control" name="contenidoPreview" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value["contenidoPreview"];?>
">
   </div>
   <!-- <div class="form-group">
     <label for="descripcionForm">ContenidoFull</label>
     <input type="text" class="form-control" name="contenidoFull" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['contenidoFull'];?>
">
   </div> -->
   <div class="form-group">
     <label for="sel1">Categoria:</label>
     <select class="form-control" id="sel1" name="categoriaForm" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value["id_categoria"];?>
">
       <option>Futbol</option>
       <option>Esports</option>
     </select>
   </div>
   <div class="form-group">
     <label for="descripcionForm">Url imagen</label>
     <input type="text" class="form-control" name="imagenForm" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value["imagen"];?>
">
   </div>
   <button type="submit" class="btn btn-primary">Confirmar</button>
 </form>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
