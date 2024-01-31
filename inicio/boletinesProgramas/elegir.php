<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/flatly.css" />
    <link rel="stylesheet" type="text/css" href="../css/boletinEditar.css" />
    <script src="https://kit.fontawesome.com/4989dcb279.js" crossorigin="anonymous"></script>
    <title>Cuatrimestres</title>
</head>
<header>
    <ul class="navbar-nav me-auto" style="padding:1%;">
      <li class="nav-item">
        <a class="nav-link text-warning" href="../inicio.php"><i class="fa-solid fa-arrow-left"></i></a>
      </li>
    </ul>
  </header>
<body>
   
    <div class="contenedor-flex">
        <div class="contenedor-linea">
            <div class="texto">
                <label class="text-center">Seleccione el cuatrimestre a rellenar, recuerde que no podrá utilizar el segundo cuatrimestre sin antes haber llenado el primero.</label>
            </div>
            <div class="botones">
                <form action="formularioBoletines.php" method=post>
                <button name="primero" class="btn btn-warning btn-sm"><i class="fa-solid fa-leaf"></i> Primer Cuatrimestre</button>
                <input type="text" name="input1" hidden value="1ro">
                </form>
                <form action="formularioBoletines.php" method=post>
                <button name="segundo" class="btn btn-warning btn-sm" style="float:right;"><i class="fa-solid fa-seedling"></i> Segundo Cuatrimestre</button>
                <input type="text" hidden name="input2" value="2do">
                </form>
            </div>' 
        </div>
    </div>
    
</body>
</html>