<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/flatly.css" />
	<script src="https://kit.fontawesome.com/4989dcb279.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<title>Consultar Boletin</title>
</head>

<header>
  <ul class="navbar-nav me-auto" style="padding:1%;">
    <li class="nav-item">
      <a class="nav-link text-warning" href="../inicio.php"><i class="fa-solid fa-arrow-left"></i></a>
    </li>
  </ul>
</header>
<body>
	
	<div class="container border border-warning">
		<br>
		<div class="row">
		<div class="modal" tabindex="-1" role="dialog" id="modal1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Buscar y consultar boletines</h5>
            </div>
            <div class="modal-body">
              <p class="primary">Debe ingresar el numero de dni del alumno sin puntos ni espacios, y luego clickear en el boton, dependiendo la tarea que desee realizar.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
	<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>
	<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
		<h3 class="lead">Consultar Boletines</h3>
		<hr/>
	
			<form action="..\boletinesProgramas\seleccion.php" method="POST">

				<div class="form-group">
					<label>DNI</label>
					<input type="text" class="form-control" placeholder="ingrese su dni sin espacios ni puntos" name="DNIBOLE" maxlength="8" minlength="8" required="required" pattern="[0-9]+"/>
				</div>
				<br>
                <div class="btn-group" role="group" aria-label="Basic example">
				<button type="submit" name="boletin" class="btn btn-warning btn-sm" style="font-size:10px;" ><i class="fa-solid fa-paper-plane"></i></span> Exportar a PDF</button>
				&nbsp;&nbsp;
				<button type="submit" name="editar" class="btn btn-info btn-sm" style="font-size:10px;" ><i class="fa-solid fa-file-pen"></i></span> Editar boletines</button>
				&nbsp;&nbsp;
				<button type="submit" name="borrar1" class="btn btn-primary btn-sm" style="font-size:10px;"  ><i class="fa-solid fa-eraser"></i></span> Borrar boletin</button>
				&nbsp;&nbsp;
			</form>
			
			<button class="btn btn-danger btn-sm" style="font-size:10px;" id="btnEliminar" ><i class="fa-solid fa-trash-can"></i></span> Eliminar todos los boletines</button>
			</div>
			<br>
			<button class="btn btn-secondary " type="button" style="float: right;" data-toggle='modal' data-target='#modal1'><i class="fa-solid fa-handshake-angle"></i>Ayuda</button>
			<br><br>
		</div>
	</div>
	</div>
</body>

<script src="validacion.js"></script>
</html>