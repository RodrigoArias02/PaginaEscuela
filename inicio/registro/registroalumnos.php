<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Alumnos</title>
    <link rel="stylesheet" href="../css/flatly.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4989dcb279.js" crossorigin="anonymous"></script>
</head>

<header>
  <ul class="navbar-nav me-auto" style="padding:1%;">
    <li class="nav-item">
      <a class="nav-link text-warning" href="../inicio.php"><i class="fa-solid fa-arrow-left"></i></a>
    </li>
  </ul>
</header>
<body class="">
    <div class="container">
    <div class="row">
    <div class="modal" tabindex="-1" role="dialog" id="modal1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Registrar Alumnos</h5>
            </div>
            <div class="modal-body">
              <p class="primary">Debe rellenar todos los campos como se indica en los renglones y luego apretar registrar, si se quiere confirmar el registro buscar en el apartado consultar alumnos</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
        <div class=" col-12 col-sm-12 col-md-1 col-lg-12 col-xl-12">
        </div>
        <div class="col-12 col-sm-12 col-md-10 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header text-white bg-warning mb-3" >
                   Registrar Alumnos
                </div>
                <div class="card-body">
                  <form action="registrar.php" method="post">
                    <div class="form-group">
                    <label>Nombre del Alumno</label>
                    <input type="text" class="form-control" name="nombre_alumno"  placeholder="Ingrese nombre aqui" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label>Apellido/s del Alumno</label>
                    <input type="text" class="form-control" name="apellido_alumno"  placeholder="Ingrese apellido aqui" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label>Nombre del Tutor</label>
                    <input type="text" class="form-control" name="nombre_tutor"  placeholder="Ingrese nombre del tutor aqui" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label>Apellido/s del Tutor</label>
                    <input type="text" class="form-control" name="apellido_tutor"  placeholder="Ingrese apellido aqui" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label>DNI alumno</label>
                    <input type="text" class="form-control" name="dni_alumno" placeholder="DNI alumno" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label>DNI tutor</label>
                    <input type="text" class="form-control" name="dni_tutor" placeholder="DNI tutor" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label>Cuil Alumno</label>
                    <input type="text" class="form-control" name="cuil_alumno" placeholder="cuil alumno" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label>Cuil tutor</label>
                    <input type="text" class="form-control" name="cuil_tutor" placeholder="cuil tutor" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label>Nro de Legajo</label>
                    <input type="text" class="form-control" name="legajo" placeholder="legajo" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label>Fecha de Nacimiento del Alumno</label>
                    <input type="date" class="form-control" name="fecha_nac" placeholder="fecha nacimiento" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label>Lugar de Nacimiento del Alumno</label>
                    <input type="text" class="form-control" name="lugar_nac" placeholder="lugar de nacimiento" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label>Nacionalidad del Alumno</label>
                    <input type="text" class="form-control" name="nacionalidad" placeholder="nacionalidad" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label>Direccion Actual</label>
                    <input type="text" class="form-control" name="direccion" placeholder="direccion" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label>Telefono de contacto</label>
                    <input type="text" class="form-control" name="telefono" placeholder="(codigo de area)123456" required>
                    </div>
                    <br>
                    <div class="form-group">
                      <label>Curso</label>
                      <select class="form-select form-select-lg mb-3" required  name=año aria-label=".form-select-lg example">
                        <option selected>Seleccione curso</option>
                        <option value="1ero">1ero</option>
                        <option value="2do">2do</option>
                        <option value="3ro">3ro</option>
                        <option value="4to">4to</option>
                        <option value="5to">5to</option>
                        <option value="6to">6to</option>
                        <option value="7mo">7mo</option>
                      </select>
                      <label>Division</label>
                      <select class="form-select form-select-sm" required  name=division aria-label=".form-select-sm example">
                        <option selected>Seleccione division</option>
                        <option value="1ra">1era</option>
                        <option value="2da">2da</option>
                        <option value="3ra">3ra</option>
                        <option value="4ta">4ta</option>
                        <option value="5ta">5ta</option>
                        <option value="6ta">6ta</option>
                      </select>
                      <label>Ciclo</label>
                      <select class="form-select form-select-sm" required  name=ciclo aria-label=".form-select-sm example">
                        <option selected>Seleccione ciclo</option>
                        <option value="basico">Basico</option>
                        <option value="tecmu">Superior/Tecmu</option>
                        <option value="tecpro">Superior/Tecpro</option>
                      </select>
                      <label>Turno</label>
                      <select class="form-select form-select-sm" required  name=turno aria-label=".form-select-sm example">
                        <option selected>Seleccione turno</option>
                        <option value="Mañana">Mañana</option>
                        <option value="Tarde">Tarde</option>
                        <option value="Vespertino">Vespertino</option>
                      </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-warning" name="registrar">Registrar</button>
                    <button class="btn btn-secondary " type="button" style="float: right;" data-toggle='modal' data-target='#modal1'><i class="fa-solid fa-handshake-angle"></i>Ayuda</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
</body>
<?php
if(isset($_POST['registrar'])){
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="boletines";
}

?>
</html>