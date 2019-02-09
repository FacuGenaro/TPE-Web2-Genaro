<form>
  <div class="form-group" method="post" action="verificarLogin">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="input" class="form-control" name="usuarioId">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="input" class="btn btn-primary">Submit</button>
  <div class="">
    {$mensaje}
  </div>
</form>
