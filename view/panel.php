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
                  <div class="intro">
                        <h1>Bienvenido al panel</h1>
                        <p>¿Estas listo para las labores de hoy?</p>
                  </div>

                  <div class="functions">
                        <div class="">
                              <h1>Informe</h1>
                              <p>Levantar informe a un usuario</p>
                              <button id="opcion1" class="execute btn_informe">Ejecutar</button>
                        </div>

                        <div class="">
                              <h1>Descargas</h1>
                              <p>Descargar el expediente de un usuario</p>
                              <button id="opcion2" class="execute btn_descarga">Ejecutar</button>
                        </div>

                        <div class="">
                              <h1>Registro</h1>
                              <p>Registra empleados nuevos en tu equipo</p>
                              <button id="opcion3" class="execute btn_descarga">Ejecutar</button>
                        </div>
                  </div>


                  <div id="form1" class="form formulario">
                        <form class="myform" action="" method="post">
                              <h1>Levantar un reporte</h1>

                              <select name="empleado" id="">
                                    <option value="Jorge Bernuil">Jorge Bernuil</option>
                              </select>

                              <label for="">Fecha</label>
                              <input type="date" name="fecha" placeholder="Fecha" id="">

                              <select name="autor" id="">
                                    <option value="luis abrego">Luis Abrego</option>
                              </select>
                              
                              <label for="">Descripción</label>
                              <textarea name="descripcion" placeholder="Ingrese una descripcion" id=""></textarea>

                              <input class="btn-input" name="btn_informe" type="submit" value="EXECUTE">
                        </form>
                  </div>


                  <div id="form2" class="form formulario oculto">
                        <form action="" method="post">
                              <h1>Descargar expediente</h1>

                              <label for="">Numero id</label>
                              <input type="number" name="numeroid" placeholder="Ingrese numero id" id="">

                              <input class="btn-input" type="submit" value="EXECUTE">
                        </form>
                  </div>


                  <div id="form3" class="form formulario oculto">
                        <form class="myform" action="../php/registro_empleado.php" method="post">
                              <h1>Registro de empleado</h1>

                              <label for="">Numero id</label>
                              <input type="number" name="numeroid" placeholder="Ingrese numero id" id="">

                              <label for="">Nombre</label>
                              <input type="text" name="nombre" placeholder="Ingrese nombre de empleado" id="">

                              <label for="">Puesto de trabajo</label>
                              <input type="text" name="departamento" placeholder="Ingrese puesto de trabajo" id="">


                              <input class="btn-input" type="submit" value="Registrar empleado">
                        </form>
                  </div>
            </section>


            
            <aside class="aside">
                  <div>
                        <?php
                        include('../php/conexion.php');

                        if (isset($_SESSION['usuario'])):
                              $usuario = $_SESSION['usuario'];

                              $sql = "SELECT * FROM autores WHERE LOWER(nombre) = '$usuario'";
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