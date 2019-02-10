{include file="header.tpl"}
  <div class="noticias">
    {debug}
    <div class="container-fluid">
       <div class="row">
         <form>
           <div class="form-group" method="post" action="verificarLogin">
             <label>Usuario</label>
             <input type="input" class="form-control" id="usuarioId" name="usuarioId" aria-describedby="usuarioId">
           </div>
           <div class="form-group">
             <label>Password</label>
             <input type="password" class="form-control" id="passwordId" name="passwordId">
           </div>
           <button type="input" class="btn btn-primary">Submit</button>
           <div class="">
             {$mensaje}
           </div>
         </form>
      </div>
  </div>
{include file="footer.tpl"}
