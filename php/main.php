<?php
      include('conexion.php');

      function listar_empleado($conexion){
            $sql = "SELECT * FROM empleados";
            $consulta = mysqli_query($conexion, $sql);

            $resultado = false;

            if($consulta && mysqli_num_rows($consulta)>0){
                  $resultado = $consulta;
            }

            return $resultado;
      }


      function listar_lideres($conexion){
            $sql = "SELECT * FROM lideres";
            $consulta = mysqli_query($conexion, $sql);

            $resultado = false;

            if($consulta && mysqli_num_rows($consulta)>0){
                  $resultado = $consulta;
            }

            return $resultado;
      }

?>