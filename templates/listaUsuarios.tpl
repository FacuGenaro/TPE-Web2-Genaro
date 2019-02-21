{include file="headerAdmin.tpl"}
<div class="noticias">
  <div class="container-fluid">
    <div class="row">
      {foreach from=$usuario item=users}
       <div class="row-md-4">
         <h2>ID: {$users['id_usuario']} | User: {$users['user']} | <a href="darPermisos/{$users['user']}">Dar permisos de administrador</a></li> / <a href="quitarPermisos/{$users['user']}">Quitar Permisos de administrador</a></li> / <a href="eliminarUsuario/{$users['user']}">ELIMINAR</a></li></h2>
       </div>
      {/foreach}
  </body>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  </html>
