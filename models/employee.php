<?php

  class Employee{

    //public values
    public $id;
    public $name;
    public $email;

    //methods
    public function __construct($id,$name,$email){
      $this->id=$id;
      $this->name=$name;
      $this->email=$email;

    }

    public static function consult(){
      $listEmployees=[];
      $conexionBD=BD::createInstance();
      $sql=$conexionBD->query("SELECT * FROM empleados");

      foreach($sql->fetchAll() as $employee){
        $listEmployees[] = new Employee($employee['id'],$employee['name'],$employee['email']);
      }
      return $listEmployees;
    }

    public static function create($name, $email){
      $conexionBD=BD::createInstance();
      $sql=$conexionBD->prepare("INSERT INTO empleados(name,email) VALUES (?,?)");
      $sql->execute(array($name,$email));
    }

    public static function delete($id){
      $conexionBD=BD::createInstance();
      $sql=$conexionBD->prepare("DELETE FROM empleados WHERE id=?");
      $sql->execute(array($id));
    }

    public static function search($id){
      $conexionBD=BD::createInstance();
      $sql=$conexionBD->prepare("SELECT * FROM empleados WHERE id=?");
      $sql->execute(array($id));
      $employee=$sql->fetch();
      return new Employee($employee['id'],$employee['name'],$employee['email']);
    }

  }

?>