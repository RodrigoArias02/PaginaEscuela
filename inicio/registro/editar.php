<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/flatly.css">
    <script src="https://kit.fontawesome.com/4989dcb279.js" crossorigin="anonymous"></script>
    <title>Editar</title>
</head>

<header>
  <ul class="navbar-nav me-auto" style="padding:1%;">
    <li class="nav-item">
      <a class="nav-link text-warning" href="../inicio.php"><i class="fa-solid fa-arrow-left"></i></a>
    </li>
  </ul>

</header>
<body class="">
    <?php
    include('../../db.php');

    if(isset($_POST['update'])){
        $nombre_alumno=$_POST['nombre_alumno'];
        $apellido_alumno=$_POST['apellido_alumno'];
        $nombre_tutor=$_POST['nombre_tutor'];
        $apellido_tutor=$_POST['apellido_tutor'];
        $dni_alumno=$_POST['dni_alumno'];
        $dni_tutor=$_POST['dni_tutor'];
        $cuil_alumno=$_POST['cuil_alumno'];
        $cuil_tutor=$_POST['cuil_tutor'];
        $legajo=$_POST['legajo'];
        $fecha_nac=$_POST['fecha_nac'];
        $lugar_nac=$_POST['lugar_nac'];
        $nacionalidad=$_POST['nacionalidad'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $año=$_POST['año'];
        $division=$_POST['division'];
        $ciclo=$_POST['ciclo'];
        $turno=$_POST['turno'];
        $curso=$año . ' ' . $division;

        $sql="UPDATE registro SET nombre_alumno='$nombre_alumno',apellido_alumno='$apellido_alumno',nombre_tutor='$apellido_tutor',dni_alumno='$dni_alumno',dni_tutor='$dni_tutor',cuil_alumno='$cuil_alumno',cuil_tutor='$cuil_tutor',legajo='$legajo',fecha_nac='$fecha_nac',lugar_nac='$lugar_nac',nacionalidad='$nacionalidad',direccion='$direccion',telefono='$telefono',curso='$curso',ciclo='$ciclo',turno='$turno' WHERE id=".$_POST['id'];

        if($conexion->query($sql)===TRUE){
            ?>
            <script>
                alert("usuario actualizado")
                window.location.replace('consultar.php');
            </script>
        <?php
        }else{
            ?>
            <script>
                alert("error al actualizar")
                window.location.replace('consultar.php');
            </script>
        <?php
        }
    }


    $id=isset($_POST['id'])?(int)$_POST['id'] :0;

    $sql="SELECT * FROM registro WHERE id={$id}";
    $result=mysqli_query($conexion,$sql);
    //$result=$conexion->query($sql);

    $row= mysqli_fetch_assoc($result);

    ?>
    <div class="container border border-warning bg-white">
        <br>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="box">
                <h3 class="lead"><i class="glyphicon glyphicon-plus"></i>&nbsp;Modificar Alumno</h3>
                <hr>    
                <form action=" " method="POST">
                        <label type="hidden" for="id"></label><br>
                        <input type="hidden" value="<?php echo $row['id'];?>" name="id">
                        <br>
                        <label for="nombre_alumno">Nombre/s del Alumno</label><br>
                        <input type="text" name="nombre_alumno" id="nombre_alumno" value="<?php echo $row['nombre_alumno']; ?>" class="form-control">
                        <br>
                        <label for="apellido_alumno">Apellido/s del Alumno</label><br>
                        <input type="text" name="apellido_alumno" id="apellido_alumno" value="<?php echo $row['apellido_alumno']; ?>" class="form-control">
                        <br>
                        <label for="nombre_tutor">Nombre/s del Tutor</label>
                        <input type="text" name="nombre_tutor" id="nombre_tutor" value="<?php echo $row['nombre_tutor']; ?>" class="form-control">
                       <br>
                       <label for="apellido_tutor">Apellido/s del Tutor</label>
                        <input type="text" name="apellido_tutor" id="apellido_tutor" value="<?php echo $row['apellido_tutor']; ?>" class="form-control">
                       <br>
                       <label for="dni_alumno">DNI del Alumno</label><br>
                        <input type="text" name="dni_alumno" id="dni_alumno" value="<?php echo $row['dni_alumno']; ?>" class="form-control">
                        <br>
                        <label for="dni_tutor">DNI del Tutor</label>
                        <input type="text" name="dni_tutor" id="dni_tutor" value="<?php echo $row['dni_tutor']; ?>" class="form-control">
                       <br>
                       <label for="cuil_alumno">CUIL del Alumno</label><br>
                        <input type="text" name="cuil_alumno" id="cuil_alumno" value="<?php echo $row['cuil_alumno']; ?>" class="form-control">
                        <br>
                        <label for="cuil_tutor">CUIL del Tutor</label>
                        <input type="text" name="cuil_tutor" id="cuil_tutor" value="<?php echo $row['cuil_tutor']; ?>" class="form-control">
                       <br>
                       <label for="legajo">Legajo</label>
                        <input type="text" name="legajo" id="legajo" value="<?php echo $row['legajo']; ?>" class="form-control">
                       <br>
                       <label for="fecha_nac">Fecha de Nacimiento del Alumno</label>
                        <input type="text" name="fecha_nac" id="fecha_nac" value="<?php echo $row['fecha_nac']; ?>" class="form-control">
                       <br>
                       <label for="lugar_nac">Lugar de Nacimiento del Alumno</label>
                        <input type="text" name="lugar_nac" id="lugar_nac" value="<?php echo $row['lugar_nac']; ?>" class="form-control">
                       <br>
                       <label for="nacionalidad">Nacionalidad</label>
                        <input type="text" name="nacionalidad" id="nacionalidad" value="<?php echo $row['nacionalidad']; ?>" class="form-control">
                       <br>
                       <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" id="direccion" value="<?php echo $row['direccion']; ?>" class="form-control">
                       <br>
                       <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" id="telefono" value="<?php echo $row['telefono']; ?>" class="form-control">
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
                       
                        <input type="submit" name="update" value="Actualizar" class="btn btn-warning">
                    </form>
                    <br>
            </div>
        </div>
    </div>
 </div>
    
</body>
</html>