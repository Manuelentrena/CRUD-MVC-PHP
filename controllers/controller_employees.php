<?php

include_once("models/employee.php");
include_once("conexion.php");

class ControllerEmployees{

  //methods
  public function initial(){
    $Employees = Employee::consult();
    include_once("views/employees/initial.php");
  }

  public function create(){
    if($_POST){
      $name = $_POST['name'];
      $email = $_POST['email'];
      Employee::create($name,$email);
    }
    include_once("views/employees/create.php");
  }
  
  public function modify(){
    include_once("views/employees/modify.php");
  }
}


?>