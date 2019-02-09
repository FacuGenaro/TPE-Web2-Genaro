<?php
/* Smarty version 3.1.33, created on 2019-02-09 20:06:05
  from 'C:\xampp\htdocs\TPE-Web-2-Genaro\templates\editarNoticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5f249d90ae52_54570006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4fa05e23552c4ae5a5723bde7be7df9902d0ba7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web-2-Genaro\\templates\\editarNoticia.tpl',
      1 => 1549739159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c5f249d90ae52_54570006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="nuevaNoticia">
  <?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
?>
  <div class="container">
 <h2>Formulario Edicion</h2>
 <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
/confirmarEdit">
   <div class="form-group">
     <input type="hidden" class="form-control" id="id_noticiaForm" name="id_noticiaForm" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
">
   </div>
   <div class="form-group">
     <label for="tituloForm">Titulo</label>
     <input type="text" class="form-control" id="tituloForm" name="tituloForm" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
">
   </div>
   <div class="form-group">
     <label for="descripcionForm">ContenidoPreview</label>
     <input type="text" class="form-control" id="contenidoPreview" name="contenidoPreview" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['contenidoPreview'];?>
">
   </div>
   <div class="form-group">
     <label for="sel1">Categoria:</label>
     <select class="form-control" id="sel1" id="categoriaForm" name="categoriaForm" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['categoriaForm'];?>
">
       <option>Futbol</option>
       <option>Esports</option>
     </select>
   </div>
   <div class="form-group">
     <label for="descripcionForm">Imagen</label>
     <input type="text" class="form-control" id="imagen" name="imagen" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['imagen'];?>
">
   </div>
   <button type="submit" class="btn btn-primary">Confirmar</button>
 </form>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- <div class="form-group">
  <label for="descripcionForm">ContenidoFull</label>
  <input type="text" class="form-control" name="contenidoFull" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['contenidoFull'];?>
">
</div> -->
<?php }
}
