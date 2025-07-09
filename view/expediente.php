<?php session_start() ?>
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
                  <?php
                        include('../php/conexion.php');

                        if (!isset($_GET['numeroid']) || empty($_GET['numeroid'])) {
                              echo "Ingrese un número ID";
                              exit;
                        }

                        $numeroid = mysqli_real_escape_string($conexion, $_GET['numeroid']);

                        $sql = "SELECT 
                                    empleados.numero_id AS empleado_id, 
                                    empleados.nombre AS empleado_nombre, 
                                    empleados.departamento AS empleado_departamento,
                                    reportes.autor_id AS autor_id, 
                                    reportes.fecha AS fecha, 
                                    reportes.descripcion AS descripcion,
                                    lideres.nombre AS autor_nombre

                                    FROM reportes
                                    INNER JOIN empleados ON reportes.empleado_id = empleados.numero_id
                                    INNER JOIN lideres ON lideres.numero_id = reportes.autor_id
                                    WHERE empleados.numero_id = '$numeroid'";

                        $resultado = mysqli_query($conexion, $sql);

                        if ($resultado && mysqli_num_rows($resultado) > 0):
                              while ($fila = mysqli_fetch_assoc($resultado)):
                        ?>

                        <div class="intro">
                              <h1><?= htmlspecialchars($fila['empleado_nombre']) ?></h1>
                              <h3><?= htmlspecialchars($fila['empleado_departamento']) ?></h3>
                              <h3>ID: <?= htmlspecialchars($fila['empleado_id']) ?></h3>
                        </div>

                        <div class="reportes">
                              <article>
                                    <h1>Lider: <?= htmlspecialchars($fila['autor_nombre']) ?></h1>
                                    <h3>Fecha: <?= htmlspecialchars($fila['fecha']) ?></h3>
                                    <p><?= nl2br(htmlspecialchars($fila['descripcion'])) ?></p>
                              </article>
                        </div>

                        <?php
                              endwhile;
                        else:
                              echo "No se encontraron resultados.";
                        endif;
                  ?>
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