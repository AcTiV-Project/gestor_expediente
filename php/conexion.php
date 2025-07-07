<?php
      $servidor = "localhost";
      $usuario = "root";
      $pass = "";
      $db = "gestion_empleados";

      $conexion = new mysqli($servidor, $usuario, $pass, $db);

      if($conexion->connect_error){
            die("Error de conexion...". $conexion->connect_error);
      }
      else{
            //echo "Exito!";
      }
?>