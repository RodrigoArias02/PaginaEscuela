<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link rel="stylesheet" href="../css/flatly.css">
    
    <script src="https://kit.fontawesome.com/4989dcb279.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </head>

<header>
  <ul class="navbar-nav me-auto" style="padding:1%;">
    <li class="nav-item">
      <a class="nav-link text-warning" href="../inicio.php"><i class="fa-solid fa-arrow-left"></i></a>
    </li>
  </ul>

</header>
<body>

    <div class="container">
        <div class="row">
        <div class="modal" tabindex="-1" role="dialog" id="modal1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Buscar y Consultar datos de Alumnos</h5>
            </div>
            <div class="modal-body">
              <p class="primary">Aqui podras buscar a un alumno por, su nombre o su apellido, o por su curso y division (escriba 1ero 1era), ademas si le facilitan el dni podra tambien buscar por ello.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
           <div class="col-12 col-sm-12 col-md-1 col-lg-12 col-xl-12"></div>
            <span class="border border-warning">
                <div class="col-12 col-sm-12 col-md-10 col-lg-12 col-xl-12">
                    
                    <form action="consultas.php" method="POST">
                        <br><br>
                        <div class="form-group">
					    <label>Ingrese nombre,apellido, dni o curso</label>
                        <br>
					    <input type="text" class="form-control" name="consultar" required="required"/>
			            </div>
                        <br>
                        <button type="submit" value="consultar" class="btn btn-warning"> <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
                        <br>
                        <br>
                    </form>
                    
                </div>
                <button class="btn btn-secondary " type="button" style="float: right;" data-toggle='modal' data-target='#modal1'><i class="fa-solid fa-handshake-angle"></i>Ayuda</button>
              <br><br>  
              </span>
                
        </div>
    </div>
</body>
</html>