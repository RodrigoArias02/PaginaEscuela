<?php
if (isset($_POST['primero'])) {
	$valor = $_POST['input1'];
}
if (isset($_POST['segundo'])) {
	$valor = $_POST["input2"];
}
if ($valor == "1ro") {
	$ruta = "save_1.php";
} else {
	$ruta = "save_2.php";
}
if (!$valor) {
	header("Location: ../inicio.php");
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="../css/flatly.css" />
	<link rel="stylesheet" type="text/css" href="../css/oculta.css" />
	<script src="https://kit.fontawesome.com/4989dcb279.js" crossorigin="anonymous"></script>
</head>
<header>
	<ul class="navbar-nav me-auto" style="padding:1%;">
		<li class="nav-item">
			<a class="nav-link text-warning" href="elegir.php"><i class="fa-solid fa-arrow-left"></i></a>
		</li>
	</ul>
</header>

<body>
	<div class="container border border-warning">

		<div class="row">

			<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
				<h3 class="lead">Usted va a realizar el boletin del
					<?php echo $valor; ?> cuatrimestre
				</h3>
				<hr />
				<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
					<form action="<?php echo $ruta; ?>" method="POST">

						<div class="form-group">
							<label>DNI</label>
							<input type="text" class="form-control" name="DNI" maxlength="8" minlength="8"
								required="required" pattern="[0-9]+" />
						</div>
						<div class="form-check">
							<input type="radio" name=ciclo value="basico" class="cicloR">
							<label>
								Ciclo básico
							</label>
						</div>
						<div class="form-check">
							<input type="radio" name=ciclo value="tecpro" class="cicloR">
							<label>
								Tecpro
							</label>
						</div>
						<div class="form-check">
							<input type="radio" name=ciclo value="tecmu" class="cicloR">
							<label>
								Tecmu
							</label>
						</div>
						<div class="form-group">
							<label>Año</label>

							<section id="ciclo_basico" class="hidden">
								1to<input type="radio" value="1" name=año class="año" />
								2to<input type="radio" value="2" name=año class="año" />
								3to<input type="radio" value="3" name=año class="año" />
							</section>
							<section id="ciclo_superior" class="hidden">
								4to<input type="radio" value="4" name=año class="año" />
								5to<input type="radio" value="5" name=año class="año" />
								6to<input type="radio" value="6" name=año class="año" />
								7mo<input type="radio" value="7" name=año class="año" />
							</section>

							<section id="materias" class="hidden">
								<div class=nota><b> Notas de las materias</b></div>

								<label class="label"></label>

								<input type="text"
									onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 100 || event.charCode == 116 || event.charCode == 101 || event.charCode == 97 || event.charCode == 112 || event.charCode == 46)"
									onkeyup="mayus(this);" required placeholder="Primera nota" class="form-control"
									name="materia_1_n1" minlength="1" maxlength="4" min="0" max="11" />

								<label class="label">Inglés</label>

								<input type="text"
									onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 100 || event.charCode == 116 || event.charCode == 101 || event.charCode == 97 || event.charCode == 112 || event.charCode == 46)"
									onkeyup="mayus(this);" required placeholder="Primera nota" class="form-control"
									name="materia_2_n1" minlength="1" maxlength="4"
									pattern="[tT,Ee,Pp,Aa,Dd,1,2,3,4,5,6,7,8,9,0,.]+" min="0" max="11" />


								<label class="label">Ed.Física</label>

								<input type="text"
									onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 100 || event.charCode == 116 || event.charCode == 101 || event.charCode == 97 || event.charCode == 112 || event.charCode == 46)"
									onkeyup="mayus(this);" required placeholder="Primera nota" class="form-control"
									name="materia_3_n1" minlength="1" maxlength="3"
									pattern="[tT,Ee,Pp,Aa,Dd,1,2,3,4,5,6,7,8,9,0]+" min="0" max="11" />


								<label class="label">Salud y Adolescencia</label>

								<input type="text"
									onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 100 || event.charCode == 116 || event.charCode == 101 || event.charCode == 97 || event.charCode == 112 || event.charCode == 46)"
									onkeyup="mayus(this);" required placeholder="Primera nota" class="form-control"
									name="materia_4_n1" minlength="1" maxlength="3"
									pattern="[tT,Ee,Pp,Aa,Dd,1,2,3,4,5,6,7,8,9,0]+" min="0" max="11" />


								<label class="label">Historia</label>

								<input type="text"
									onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 100 || event.charCode == 116 || event.charCode == 101 || event.charCode == 97 || event.charCode == 112 || event.charCode == 46)"
									onkeyup="mayus(this);" required placeholder="Primera nota" class="form-control"
									name="materia_5_n1" minlength="1" maxlength="3"
									pattern="[tT,Ee,Pp,Aa,Dd,1,2,3,4,5,6,7,8,9,0]+" min="0" max="11" />


								<label class="label">Geografía</label>

								<input type="text"
									onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 100 || event.charCode == 116 || event.charCode == 101 || event.charCode == 97 || event.charCode == 112 || event.charCode == 46)"
									onkeyup="mayus(this);" required placeholder="Primera nota" class="form-control"
									name="materia_6_n1" minlength="1" maxlength="3"
									pattern="[tT,Ee,Pp,Aa,Dd,1,2,3,4,5,6,7,8,9,0]+" min="0" max="11" />


								<label class="label">Mat.Ciclo.Supr</label>

								<input type="text"
									onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 100 || event.charCode == 116 || event.charCode == 101 || event.charCode == 97 || event.charCode == 112 || event.charCode == 46)"
									onkeyup="mayus(this);" required placeholder="Primera nota" class="form-control"
									name="materia_7_n1" minlength="1" maxlength="3"
									pattern="[tT,Ee,Pp,Aa,Dd,1,2,3,4,5,6,7,8,9,0]+" min="0" max="11" />


								<label class="label">Física</label>

								<input type="text"
									onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 100 || event.charCode == 116 || event.charCode == 101 || event.charCode == 97 || event.charCode == 112 || event.charCode == 46)"
									onkeyup="mayus(this);" required placeholder="Primera nota" class="form-control"
									name="materia_8_n1" minlength="1" maxlength="3"
									pattern="[tT,Ee,Pp,Aa,Dd,1,2,3,4,5,6,7,8,9,0]+" min="0" max="11" />



								<label class="label">Química</label>

								<input type="text"
									onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 100 || event.charCode == 116 || event.charCode == 101 || event.charCode == 97 || event.charCode == 112 || event.charCode == 46)"
									onkeyup="mayus(this);" placeholder="Primera nota" class="form-control"
									name="materia_9_n1" minlength="1" maxlength="3"
									pattern="[tT,Ee,Pp,Aa,Dd,1,2,3,4,5,6,7,8,9,0]+" min="0" max="11" />


								<label class="label">Leng.Art/Music.</label>

								<input type="text"
									onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 100 || event.charCode == 116 || event.charCode == 101 || event.charCode == 97 || event.charCode == 112 || event.charCode == 46)"
									onkeyup="mayus(this);" id="input_10_1" placeholder="Primera nota"
									class="form-control" name="materia_10_n1" minlength="1" maxlength="3"
									pattern="[tT,Ee,Pp,Aa,Dd,1,2,3,4,5,6,7,8,9,0]+" min="0" max="11" />


								<label class="label">Guion</label>

								<input type="text"
									onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 100 || event.charCode == 116 || event.charCode == 101 || event.charCode == 97 || event.charCode == 112 || event.charCode == 46)"
									onkeyup="mayus(this);" id="input_11_1" placeholder="Primera nota"
									class="form-control" name="materia_11_n1" minlength="1" maxlength="3"
									pattern="[tT,Ee,Pp,Aa,Dd,1,2,3,4,5,6,7,8,9,0]+" min="0" max="11" />

								<label class="label">Morfologia Visual</label>

								<input type="text"
									onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 100 || event.charCode == 116 || event.charCode == 101 || event.charCode == 97 || event.charCode == 112 || event.charCode == 46)"
									onkeyup="mayus(this);" id="input_12_1" placeholder="Primera nota"
									class="form-control" name="materia_12_n1" minlength="1" maxlength="3"
									pattern="[tT,Ee,Pp,Aa,Dd,1,2,3,4,5,6,7,8,9,0]+" min="0" max="11" />


								<label class="label">Morfologia Sonora</label>

								<input type="text"
									onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 100 || event.charCode == 116 || event.charCode == 101 || event.charCode == 97 || event.charCode == 112 || event.charCode == 46)"
									onkeyup="mayus(this);" id="input_13_1" placeholder="Primera nota"
									class="form-control" name="materia_13_n1" minlength="1" maxlength="3"
									pattern="[tT,Ee,Pp,Aa,Dd,1,2,3,4,5,6,7,8,9,0]+" min="0" max="11" />


								<label class="label">Introd.Multimedios</label>

								<input type="text"
									onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 100 || event.charCode == 116 || event.charCode == 101 || event.charCode == 97 || event.charCode == 112 || event.charCode == 46)"
									onkeyup="mayus(this);" id="input_14_1" placeholder="Primera nota"
									class="form-control" name="materia_14_n1" minlength="1" maxlength="3"
									pattern="[tT,Ee,Pp,Aa,Dd,1,2,3,4,5,6,7,8,9,0]+" min="0" max="11" />

							</section>
						</div>
						<div class="form-group">

							<label>Materias que Adeuda:</label>

							<input type="text" class="form-control" name="adeuda_1" />

							<input type="text" class="form-control" name="adeuda_2" />

							<input type="text" class="form-control" name="adeuda_3" />

						</div>
						<button type="submit" name="save" class="btn btn-warning"><i
								class="fa-solid fa-floppy-disk"></i> Guardar</button>
					</form>

				</div>
			</div>


			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<table class="table table-bordered">
					<thead class="alert-secondary text-white">
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>DNI</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include("../../db.php");
						require 'save_1.php';

						$query = mysqli_query($conexion, "SELECT * FROM `tecmu` ");
						while ($fetch = mysqli_fetch_array($query)) {
							?>
							<tr>
								<td>
									<?php echo $fetch['Nombre'] ?>
								</td>
								<td>
									<?php echo $fetch['Apellido'] ?>
								</td>
								<td>
									<?php echo $fetch['DNI'] ?>
								</td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>
	<script src="alert.js"></script>

	<script>
		function mayus(e) {
			e.value = e.value.toUpperCase();
		}
	</script>

</body>

</html>