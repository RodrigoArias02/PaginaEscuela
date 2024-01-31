<?php
	include("../../db.php");
	$Apellido = 0;
	$Nombre = 0;
	$CURSO = 0;
	$ciclo = 0;
	if(ISSET($_POST['save'])){
		$DNI = $_POST['DNI'];
		$AÑO =  $_POST['año'];
		$cicloRadio = $_POST['ciclo'];
		$adeuda_1=$_POST['adeuda_1'];
		$adeuda_2=$_POST['adeuda_2'];
		$adeuda_3=$_POST['adeuda_3'];
		$promocion=null;
		$query = mysqli_query($conexion, "SELECT * FROM `registro` WHERE dni_alumno='$DNI'");
        while($fetch = mysqli_fetch_array($query)){
			$Apellido = $fetch['apellido_alumno'];
			$Nombre = $fetch['nombre_alumno'];
			$CURSO=$fetch['curso'];
			$ciclo=$fetch['ciclo'];
			$TURNOS=$fetch['turno'];
	    }
		$verificar_dni=mysqli_query($conexion,"SELECT * FROM `tecmu` WHERE DNI='$DNI'");
		if(mysqli_num_rows($verificar_dni) > 0){
			?>
			<script>
				alert("El boletin ya existe")
				window.location.replace("formularioBoletines.php");
			</script>
			<?php
			exit();
		}
		$numero=substr($CURSO, 0, 1 ); 
		if($Apellido != 0 || $Nombre != 0 || $CURSO != 0 || $ciclo != 0){
			if($AÑO==$numero && $ciclo==$cicloRadio){
			$materia_1_n1 = $_POST['materia_1_n1'];
			$materia_1_n2 = null;
			$materia_2_n1 = $_POST['materia_2_n1'];
			$materia_2_n2 = null;
			$materia_3_n1 = $_POST['materia_3_n1'];
			$materia_3_n2 = null;
			$materia_4_n1 = $_POST['materia_4_n1'];
			$materia_4_n2 = null;
			$materia_5_n1 = $_POST['materia_5_n1'];
			$materia_5_n2 = null;
			$materia_6_n1 = $_POST['materia_6_n1'];
			$materia_6_n2 = null;
			$materia_7_n1 = $_POST['materia_7_n1'];
			$materia_7_n2 = null;
			$materia_8_n1 = $_POST['materia_8_n1'];
			$materia_8_n2 = null;
			$materia_9_n1 = $_POST['materia_9_n1'];
			$materia_9_n2 = null;
			$materia_10_n1 = $_POST['materia_10_n1'];
			$materia_10_n2 = null;
			$materia_11_n1 = $_POST['materia_11_n1'];
			$materia_11_n2 = null;
			$materia_12_n1 = $_POST['materia_12_n1'];
			$materia_12_n2 = null;
			$materia_13_n1 = $_POST['materia_13_n1'];
			$materia_13_n2 = null;
			$materia_14_n1 = $_POST['materia_14_n1'];
			$materia_14_n2 = null;


			$consulta = "INSERT INTO `tecmu` (Nombre,Apellido,DNI,AÑO,TURNOS,CURSO,ciclo
			,promocion,adeuda_1,adeuda_2,adeuda_3,materia_1_n1
			,materia_1_n2,materia_2_n1,materia_2_n2,materia_3_n1,materia_3_n2,materia_4_n1
			,materia_4_n2,materia_5_n1,materia_5_n2,materia_6_n1,materia_6_n2,materia_7_n1
			,materia_7_n2,materia_8_n1,materia_8_n2,materia_9_n1,materia_9_n2,materia_10_n1
			,materia_10_n2,materia_11_n1,materia_11_n2,materia_12_n1,materia_12_n2
			,materia_13_n1,materia_13_n2,materia_14_n1,materia_14_n2) VALUES ('$Nombre','$Apellido','$DNI','$AÑO','$TURNOS','$CURSO','$ciclo'
			,'$promocion','$adeuda_1','$adeuda_2','$adeuda_3','$materia_1_n1'
			,'$materia_1_n2','$materia_2_n1','$materia_2_n2','$materia_3_n1','$materia_3_n2','$materia_4_n1'
			,'$materia_4_n2','$materia_5_n1','$materia_5_n2','$materia_6_n1','$materia_6_n2','$materia_7_n1'
			,'$materia_7_n2','$materia_8_n1','$materia_8_n2','$materia_9_n1','$materia_9_n2','$materia_10_n1'
			,'$materia_10_n2','$materia_11_n1','$materia_11_n2','$materia_12_n1','$materia_12_n2'
			,'$materia_13_n1','$materia_13_n2','$materia_14_n1','$materia_14_n2');";
			mysqli_query($conexion, $consulta);
			mysqli_close($conexion);
			?>
			<script>
			alert('Generado exitosamente!')
				window.location.replace("formularioBoletines.php");
				</script>
			<?php
			}else{
				?>
				<script>
					alert('El año seleccionado no coincide con el del alumno')
					window.location.replace("formularioBoletines.php");
				</script>
				<?php
			}
	    }else if($Apellido==0){
			?>
			<script>
				alert('El alumno no fue cargado')
				window.location.replace("../registro/registroalumnos.php");
			</script>
			<?php
		}
	}
?>