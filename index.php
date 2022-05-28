<?php
  require_once "Controladores/controlador.php";
  require_once "Modelos/modelo.php";
  require_once "Controladores/formulariocontrolador.php";
  require_once "Modelos/formulariomodelo.php";

  $mvc= new mvcController();
  $mvc->plantilla();

?>