<?php
include("../../db.php");
if(!$conexion){
    echo 'error en la conexion';
}else{
    //echo 'conectado la base de datos <br>';
}

if(!isset($_POST['consultar'])){
    $_POST['consultar']="";
    $consultar=$_POST['consultar'];
}
$consultar=$_POST['consultar'];
$leer="SELECT * FROM registro WHERE nombre_alumno LIKE '%".$consultar."%' OR apellido_alumno LIKE '%".$consultar."%' OR dni_alumno LIKE '%".$consultar."%' OR curso LIKE '%".$consultar."%'";
$almacenar_consulta = mysqli_query($conexion,$leer);
//estas instrucciones envian y almacenan la consulta, es decir la realizan, pero para mostrarla ir al archivo consultar.php
?>
<link rel="stylesheet" href="../css/flatly.css">

<header>
  <ul class="navbar-nav me-auto" style="padding:1%;">
    <li class="nav-item">
      <a class="nav-link text-warning" href="../inicio.php"><i class="fa-solid fa-arrow-left"></i></a>
    </li>
  </ul>

</header>
            <body>
                <div class="container-fluid">
                    <div class="row">
                    
                        <div class="col-12 col-sm-12 col-md-10 col-lg-12 col-xl-12">
         
            <table  class="table table-light">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Nombre del Alumno</th>
                    <th scope="col">Apellido del Alumno</th>
                    <th scope="col">Nombre Tutor</th>
                    <th scope="col">Apellido Tutor</th>
                    <th scope="col">DNI alumno</th>
                    <th scope="col">DNI Tutor</th>
                    <th scope="col">Telefono de contacto</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
        
            <tbody>
            
                <?php
               
                while($row= mysqli_fetch_array($almacenar_consulta)){?>
                <tr>
                    <td><?=$row['nombre_alumno']?></td>
                    <td><?=$row['apellido_alumno']?></td>
                    <td><?=$row['nombre_tutor']?></td>
                    <td><?=$row['apellido_tutor']?></td>
                    <td><?=$row['dni_alumno']?></td>
                    <td><?=$row['dni_tutor']?></td>
                    <td><?=$row['telefono']?></td>
                    <td><?=$row['curso']?></td>
        <!--aqui van los botones editar y eliminar-->
    <form action="editar.php" method="POST">
    <td><input type="submit" class="btn btn-warning" value=Editar></td>
    <input type="hidden"  name="id" id="id" value="<?php echo $row['id'];?>">
    </form>
   
    
    <form action="eliminar.php" method="POST">
    <td><input type="submit" class="btn btn-dark" value="Eliminar"></td>
    <input type="hidden" class="d-none" name="id" id="id" value="<?php echo $row['id'];?>">
    </form>
    
</tr>
    <?php }?>
            </tbody>
            </table>
                   
            </div>
                    </div>
                </div>
            </body>
