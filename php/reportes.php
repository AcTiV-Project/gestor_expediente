<?php
      include('conexion.php');

      $lider = $_POST['lider'];
      $fecha = $_POST['fecha'];
      $empleado = $_POST['empleado'];
      $descripcion = $_POST['descripcion'];

      if($_POST['lider'] == "" || $_POST['fecha'] == "" || $_POST['empleado'] == "" || $_POST['descripcion'] == ""){
            echo "No se permiten valores vacios";
      }else{
            $sql = "INSERT INTO reportes (id, autor_id, fecha, empleado_id, descripcion)
            VALUES ('', $lider, '$fecha', $empleado, '$descripcion')";
            $resultado = mysqli_query($conexion, $sql);


            if(!$resultado){
                  die("Error de registros". mysqli_error($conexion));
            }else{
                  echo "Reporte registrado";
            }
      }
?>