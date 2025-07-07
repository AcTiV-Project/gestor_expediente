<?php
      session_start();
      include('conexion.php');

      //Validando y escapando los datos recibidos del form
      $nombre = trim(mysqli_real_escape_string($conexion, $_POST['nombre']));
      $clave = trim(mysqli_real_escape_string($conexion, $_POST['clave']));

      //Consultar el usuario
      $sql = "SELECT * FROM lideres WHERE nombre = '$nombre'";
      $resultado = mysqli_query($conexion, $sql);

      if (!$resultado){
            die("Error en la consulta SQL: " . mysqli_error($conexion));
      }

      //verificando si se encontro un usuario
      if($resultado && mysqli_num_rows($resultado)>0){
            $fila = mysqli_fetch_assoc($resultado); //Obteniendo los datos del usuario

                // Verificar la contraseña
            if (password_verify($clave, $fila['clave'])) {
                  $_SESSION['usuario'] = $fila['nombre'];

                  header('Location: ../view/panel.php');
                  exit();
            }else{
                  echo "Error: contraseña incorrecta.";
            }
      }else{
            echo "Error: usuario no encontrado.";
      }

?>