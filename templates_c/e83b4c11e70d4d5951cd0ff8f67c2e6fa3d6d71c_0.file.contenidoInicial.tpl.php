<?php
/* Smarty version 3.1.33, created on 2019-02-09 08:55:00
  from 'C:\xampp\htdocs\TPE-Web-2-Genaro\templates\contenidoInicial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5e87546b3664_99663586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e83b4c11e70d4d5951cd0ff8f67c2e6fa3d6d71c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web-2-Genaro\\templates\\contenidoInicial.tpl',
      1 => 1549697831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c5e87546b3664_99663586 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticia']->value, 'curr_news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_news']->value) {
?>
 <div class="row-md-4">
   <h2><?php echo $_smarty_tpl->tpl_vars['curr_news']->value['titulo'];?>
 / <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['curr_news']->value['id_noticia'];?>
">Borrar noticia</a></li> / <a href="editar/<?php echo $_smarty_tpl->tpl_vars['curr_news']->value['id_noticia'];?>
">Editar noticia</a></li></h2>
   <h5> Categoria: <?php echo $_smarty_tpl->tpl_vars['curr_news']->value['id_categoria'];?>
 </h5>
   <div class="imagennoticia">
     <img src= "<?php echo $_smarty_tpl->tpl_vars['curr_news']->value['imagen'];?>
" alt="">
   </div>
   <p><?php echo $_smarty_tpl->tpl_vars['curr_news']->value['contenidoPreview'];?>
 </p>
   <p><a class="btn btn-secondary" href="#" role="button">Mas información</a></p>
 </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
