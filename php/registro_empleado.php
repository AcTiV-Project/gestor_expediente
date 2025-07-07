<?php
      include('conexion.php');

      $numeroid = $_POST['numeroid'];
      $nombre = $_POST['nombre'];
      $departamento = $_POST['departamento'];


      if($_POST['numeroid'] == '' || $_POST['nombre'] == '' || $_POST['departamento'] == ''){
            echo "No se permiten valore nulos";
      }else{
            $sql = "INSERT INTO empleado (numero_id, nombre, departamento) VALUES('$numeroid', '$nombre', '$departamento')";
            $datos = mysqli_query($conexion, $sql);

            if(!$datos){
                  die("Error de registro". mysqli_error($conexion));
            }else{
                  echo "Usuario registrado...";
            }
      }
?>