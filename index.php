<!DOCTYPE html>
<html lang="es">
<head>
      <!--CSS-->
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/responsive.css">
      <link rel="stylesheet" href="../css/efect.css">

      <!--JavaScript-->
      <script src="../js/01-script.js"></script>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <div class="div-form">
            <h1>Iniciar Sesion</h1>

            <form class="myform" action="php/inicio_sesion.php" method="POST">
                  <label for="">Usuario</label>
                  <input type="text" name="nombre" placeholder="Ingrese su usuario">

                  <label for="">Contraseña</label>
                  <input type="password" name="clave" placeholder="Ingrese su contraseña" id="">

                  
                  <input class="btn-input" type="submit" value="ENTRAR">

                  <a href="view/registro_usuario.php">¿No tienes cuenta?</a>
            </form>
      </div>
</body>
</html>