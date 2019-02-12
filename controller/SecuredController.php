<?php


class SecuredController
{

  function __construct()
  {
    session_start();
    if (isset($_SESSION["user"])){

    }else{
       header(LOGIN);
    }
  }
}


 ?>
