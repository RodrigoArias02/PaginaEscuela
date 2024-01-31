<?php 
include ("../../db.php");
$query = "DELETE FROM registro where id=".$_POST['id'];
mysqli_query($conexion, $query);
if(!$query){
    ?>
        <script>
            alert("error al eliminar,intentelo mas tarde")
            window.location.replace("consultar.php");
        </script>
        <?php
}
if (mysqli_query($conexion,$query)){
    ?>
        <script>
            alert("eliminado exitosamente!")
            window.location.replace("consultar.php");
        </script>
        <?php
}
mysqli_close($conexion);
?>
