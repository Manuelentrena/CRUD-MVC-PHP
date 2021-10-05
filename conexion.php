<?php

  class BD{

    //CONEXION
    private static $instance=NULL;

    //METHODS
    public static function createInstance(){
      if( !isset (self::$instance) ){
        $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=empleados','root','root', $opcionesPDO);
      }
      return self::$instance;
    }
  }

?>