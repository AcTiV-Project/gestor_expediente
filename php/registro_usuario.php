<?php
      include('conexion.php');

      $numeroid = $_POST['numeroid'];
      $nombre = $_POST['nombre'];
      $correo = $_POST['correo'];
      $departamento = $_POST['departamento'];
      $telefono = $_POST['telefono'];
      $clave = $_POST['clave'];

      if($_POST['numeroid'] == '' || $_POST['nombre'] == '' || $_POST['correo'] == '' || $_POST['departamento'] == '' || $_POST['telefono'] == '' || $_POST['clave'] == ''){
            echo "No se permiten valores nulos";
      }else{
            $passwordCifrada = password_hash($clave, PASSWORD_DEFAULT);

            $sql = "INSERT INTO lideres VALUES('$numeroid', '$nombre', '$correo', '$departamento', '$telefono', '$passwordCifrada')";
            $query = mysqli_query($conexion, $sql);

            if(!$query){
                  die("Error de registro: ". mysqli_error($conexion));
            }
            else{
                  echo "Usuario registrado...";
            }
      }
?>