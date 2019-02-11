{include file="header.tpl"}
<div class="noticias">
  <div class="container-fluid">
    <div class="row">
      <form method="post" action="{$index}/verificarLogin">
        <div class="form-group">
          <label>Usuario</label>
          <input type="input" class="form-control" id="usuarioId" name="usuarioId" aria-describedby="usuarioId">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" id="passwordId" name="passwordId">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <div class="">
          {$mensaje}
        </div>
      </form>
    </div>
  </div>
</body>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</html>
