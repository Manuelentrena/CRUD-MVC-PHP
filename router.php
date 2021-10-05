<?php
  //GLOBAL VAR
/*   echo $controller;
  echo $action; */

  //INCLUDE CONTROLLER
  include_once("controllers/controller_$controller.php");
  $NameController="Controller".ucfirst($controller);

  $ObjControler = new $NameController();
  $ObjControler->$action();

?>