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
      <div class="grid">
            <section class="section">
                  <div class="intro">
                        <h1>Nombre: Jorge Bernuil</h1>
                        <h3>Puesto de trabajo: Informatica</h3>
                        <h3>ID: 8983614</h3>
                  </div>

                  <div class="reportes">
                        <article>
                              <h1>Jorge Bernuil</h1>
                              <h3>10/06/2025</h3>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate nobis molestiae minus fugiat at, vero eum a, quos nostrum ipsum porro non dolor cumque atque mollitia sapiente sed! Minus, soluta.
                              Exercitationem quos distinctio molestias sed minus ut, perferendis pariatur illum alias nam nihil sint, nemo amet corporis impedit culpa velit harum ullam, aut repellat id necessitatibus praesentium? Ut, voluptatem totam.
                              Consequatur error sapiente eaque, voluptates dolores cum voluptatum perferendis dolore quidem eligendi harum iusto exercitationem nam dignissimos, illum vero placeat sunt dolorum at soluta natus? Quod incidunt optio possimus animi.</p>
                        </article>
                  </div>
            </section>


            <aside class="aside">
                  <div>
                        <?php
                        include('../php/conexion.php');

                        if (isset($_SESSION['usuario'])):
                              $usuario = $_SESSION['usuario'];

                              $sql = "SELECT * FROM lideres WHERE LOWER(nombre) = '$usuario'";
                              $resultado = mysqli_query($conexion, $sql);

                              if ($resultado && mysqli_num_rows($resultado) > 0):
                              $fila = mysqli_fetch_assoc($resultado);
                        ?>
                              <h1><?= htmlspecialchars($fila['nombre']) ?></h1>

                              <ul>
                                    <li>Email: <?= htmlspecialchars($fila['correo']) ?></li>
                                    <li>Celular: +507 <?= htmlspecialchars($fila['telefono']) ?></li>
                                    <li>Área: <?= htmlspecialchars($fila['departamento']) ?></li>
                              </ul>
                        <?php
                              else:
                              echo "Error: usuario no encontrado.";
                              endif;
                        else:
                              echo "Error: no has iniciado sesión.";
                        endif;
                        ?>

                        <form action="../php/cerrar_sesion.php" method="POST">
                              <button class="exit btn-input" type="submit">SALIR</button>
                        </form>
                  </div>
            </aside>
      </div>
</body>
</html>