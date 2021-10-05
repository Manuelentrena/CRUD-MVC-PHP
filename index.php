<?php 
  //SHOW ERROS
  error_reporting(E_ALL);
  ini_set('display_errors', '1');

  //INITIAL VALUES
  $controller="pages";
  $action="home";

  if( (!empty($_GET["controler"])) && (!empty($_GET["action"])) ) {
    $controller=$_GET['controler'];
    $action=$_GET['action'];
  }

  //DEPENDENCIES
  require_once("views/template.php");



?>