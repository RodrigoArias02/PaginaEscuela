<?php
include("../../db.php");
if (!$conexion) {
    echo 'error en la conexion';
} else {
    echo 'conectado la base de datos <br>';
}
$dni_alumno = mysqli_real_escape_string($conexion, $_POST['dni_alumno']);
$verifico_dni = mysqli_query($conexion, "SELECT `dni_alumno` FROM `registro` WHERE dni_alumno = '$dni_alumno'");

if (mysqli_num_rows($verifico_dni) > 0) {
    ?>
    <script>
        alert("el dni ingresado ya se encuentra registrado")
        window.location.replace("registroalumnos.php");
    </script>
    <?php
} else {
    //para evitar inyeccion sql
    $nombre_alumno = mysqli_real_escape_string($conexion, $_POST['nombre_alumno']);
    //
    $apellido_alumno = mysqli_real_escape_string($conexion, $_POST['apellido_alumno']);
    //
    $nombre_tutor = mysqli_real_escape_string($conexion, $_POST['nombre_tutor']);
    //
    $apellido_tutor = mysqli_real_escape_string($conexion, $_POST['apellido_tutor']);
    //
    $dni_alumno = mysqli_real_escape_string($conexion, $_POST['dni_alumno']);
    //
    $dni_tutor = mysqli_real_escape_string($conexion, $_POST['dni_tutor']);
    //
    $cuil_alumno = mysqli_real_escape_string($conexion, $_POST['cuil_alumno']);
    //
    $cuil_tutor = mysqli_real_escape_string($conexion, $_POST['cuil_tutor']);
    //
    $legajo = mysqli_real_escape_string($conexion, $_POST['legajo']);
    //
    $fecha_nac = mysqli_real_escape_string($conexion, $_POST['fecha_nac']);
    //
    $lugar_nac = mysqli_real_escape_string($conexion, $_POST['lugar_nac']);
    //
    $nacionalidad = mysqli_real_escape_string($conexion, $_POST['nacionalidad']);
    //
    $direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
    //
    $fecha_nac = mysqli_real_escape_string($conexion, $_POST['fecha_nac']);
    //
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    //
    $año = mysqli_real_escape_string($conexion, $_POST['año']);
    //
    $division = mysqli_real_escape_string($conexion, $_POST['division']);
    //
    $CICLO = mysqli_real_escape_string($conexion, $_POST['ciclo']);
    //
    $TURNO = mysqli_real_escape_string($conexion, $_POST['turno']);
    //
    $curso = $año . ' ' . $division;
    //para insertar datos en un login
    if ($CICLO == "basico" && $año <= 3 || $año > 3 && $CICLO == "tecmu" || $año > 3 && $CICLO == "tecpro") {
        $sql_insert = "INSERT INTO registro(nombre_alumno,apellido_alumno,nombre_tutor,apellido_tutor,dni_alumno,dni_tutor,cuil_alumno,cuil_tutor,legajo,fecha_nac,lugar_nac,nacionalidad,direccion,telefono,curso,ciclo,turno) 
VALUES ('$nombre_alumno','$apellido_alumno','$nombre_tutor','$apellido_tutor','$dni_alumno','$dni_tutor','$cuil_alumno','$cuil_tutor','$legajo','$fecha_nac','$lugar_nac','$nacionalidad','$direccion','$telefono','$curso','$CICLO','$TURNO');";
        mysqli_query($conexion, $sql_insert);
        ?>
        <script>
            alert("registrado exitosamente!")
            window.location.replace("registroalumnos.php");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("El ciclo y año no son compatibles entre si!")
            window.location.replace("registroalumnos.php");
        </script>
        <?php
    }
}
?>