<?php
# Si no entiendes el código, primero mira a login.php

# Iniciar sesión para usar $_SESSION
session_start();

# Y ahora leer si NO hay algo llamado usuario en la sesión,
# usando empty (vacío, ¿está vacío?)
# Recomiendo: https://parzibyte.me/blog/2018/08/09/isset-vs-empty-en-php/
if (empty($_SESSION["usuario"])) {
    # Lo redireccionamos al formulario de inicio de sesión
    header("Location: ../index.php");
    # Y salimos del script
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E.E.S.T Nº3</title>
    <link rel="stylesheet" href="css/flatly.css">
    <script src="https://kit.fontawesome.com/4989dcb279.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body >
  <header>
      <nav class="navbar navbar-expand-lg navbar-light" style="background:transparent; border-bottom:1.3px solid #8b8b8b;">
        <div class="container-fluid">
          <a class="navbar-brand" href="inicio.php"><img src="../img/logo3.png" style="width: 120px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="registro/registroalumnos.php"><i class="fa-solid fa-user-pen"></i> Registrar Alumnos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro/consultar.php"><i class="fa-solid fa-user-gear"></i> Consultar Alumnos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../inicio/boletinesProgramas/elegir.php"><i class="fa-solid fa-file-circle-plus"></i> Crear Boletines</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="registro/consultarBoletin.php"><i class="fa-solid fa-file-arrow-down"></i> Consultar Boletines</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../img/manual.pdf"><i class="fa-solid fa-eye"></i> Ver Manual de Usuario</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> 

  </header>
  <div class="container">
    <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="jumbotron text-center">
            <h3 class="display-3 lead">Administración de la Técnica 3</h3>
            <p class="lead"> Siempre contigo para ayudarte </p>
            <p class="lead"> Recuerda cerrar tu sesión luego de trabajar para mantener la información en modo seguro</p>
            <a href="../logout.php" type="button" class="btn btn-warning btn-lg"><i class="fa-solid fa-lock"></i>&nbsp;Cerrar sesión</a>
            </div>
          </div>
        </div>
      </div>
</body>



</html>
