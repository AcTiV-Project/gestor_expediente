<!DOCTYPE html>
<html lang="en">
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
            <h1>Crearse una cuenta</h1>

            <form class="myform" action="../php/registro_usuario.php" method="post">
                  <label for="">Numero id</label>
                  <input type="number" name="numeroid" placeholder="Ingrese numero id" id="">

                  <label for="">Nombre</label>
                  <input type="text" name="nombre" placeholder="Ingrese su nombre" id="">

                  <label for="">Correo</label>
                  <input type="email" name="correo" placeholder="Ingrese su correo electronico" id="">

                  <label for="">Area de trabajo</label>
                  <input type="text" name="departamento" placeholder="Ingrese su area de trabajo" id="">

                  <label for="">Telefono</label>
                  <input type="number" name="telefono" placeholder="Ingrese numero telefono" id="">

                  <label for="">Contraseña</label>
                  <input type="password" name="clave" placeholder="Registre una contraseña" id="">

                  <input class="btn-input" type="submit" value="Crear cuenta">

                  <a href="../index.php">Inicia sesion</a>
            </form>
      </div>
</body>
</html>