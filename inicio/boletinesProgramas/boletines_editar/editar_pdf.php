<?php
$fecha = Date("Y");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4989dcb279.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/flatly.css">
    <link rel="stylesheet" href="../css/boletinEditar.css">
    <title>Sistema de Notas</title>

</head>

<body>
    <div class="container-fluid pt-3 py-3">

        <form action="editar.php" method="post">
            <input type="text" name="dni_cambiar" hidden value="<?php echo $dni; ?>">
            <?php
            $materiasPorCiclo = [
                1 => ["PRACTICAS DE LENGUAJE", "MATEMATICAS", "CIENCIAS NATURALES", "CIENCIAS SOCIALES", "INGLÉS", "EDUCACIÓN FÍSICA", "EDUCACIÓN ARTÍSTICA", "CONSTRUCCIÓN DE LA CIUDADANÍA", "LENGUAJE TECNOLÓGICO", "PROCESOS TECNOLÓGICOS", "SISTEMAS TECNOLÓGICOS"],
                2 => ["PRÁCTICAS DEL LENGUAJE", "MATEMÁTICAS", "HISTORIA", "GEOGRAFÍA", "BIOLOGÍA", "FISICOQUÍMICA", "INGLÉS", "EDUCACIÓN FÍSICA", "EDUCACIÓN ARTÍSTICA", "CONSTRUCCIÓN DE LA CIUDADANÍA", "LENGUAJE TECNOLÓGICO", "PROCESOS TECNOLÓGICOS", "SISTEMAS TECNOLÓGICOS"],
                4 => ["LITERATURA", "INGLÉS", "EDUCACIÓN FÍSICA", "SALUD Y ADOLESCENCIA", "HISTORIA", "GEOGRAFÍA", "MATEMÁTICA CICLO SUP.", "FÍSICA", "QUÍMICA", "LENGUAJES ARTIS/MUSIC", "GUION", "MORFOLOGÍA VISUAL", "MORFOLOGÍA SONORA", "INTROD. A LOS MULTIMED."],
                5 => ["LITERATURA", "INGLÉS", "EDUCACIÓN FÍSICA", "POLÍTICA Y CIUDADANÍA", "HISTORIA", "GEOGRAFÍA", "ANÁLISIS MATEMÁTICO", "COMUNICACIÓN", "METODOLOGÍA DE LA INVESTIGACIÓN", "LENGUAJES ARTIS/PLÁSTICA", "GUION", "GRÁFICA EDITORIAL", "TECNOLOGÍA DEL SONIDO", "SISTEMAS MULTIMEDIALES"],
                6 => ["LITERATURA", "INGLÉS", "EDUCACIÓN FÍSICA", "FILOSOFÍA", "ARTE", "MATEMÁTICA APLICADA", "LENG. ARTIST./TEATRO Y DISEÑ. ESCENOGR.", "GESTIÓN DE PROYECTOS", "DISEÑO GRÁFICO", "DERECHOS DEL TRABAJADOR", "SÍNTESIS DE IMAGEN Y ANIMACIÓN", "REALIZACIÓN AUDIOVISUAL", "SISTEMAS MULTIMEDIALES"],
                7 => ["PRÁCTICAS PROF./MULTIMEDIAL", "EMPRENDIM. PRODUC. Y DESARR. LOCAL", "TEORÍA DE LA COMUNICACIÓN", "ÉTICA Y DEONTOLOGÍA PROFESIONAL", "MARKETING DE SERVICIOS", "REALIZACIÓN AUDIOVISUAL", "ARTE DIGITAL Y DISEÑO WEB", "TECNOLOGÍA Y PRODUCCIÓN GRÁFICA"],
                8 => ["LITERATURA", "INGLÉS", "EDUCACIÓN FÍSICA", "SALUD Y ADOLESCENCIA", "HISTORIA", "GEOGRAFÍA", "MATEMÁTICA CICLO SUP.", "FÍSICA", "QUÍMICA", "TECNOLOGÍAS ELECTRÓNICAS", "LABORATORIO DE PROGRAMACIÓN", "LABORATORIO DE HARDWARE", "LABORATORIO DE SIST. OPERATIVOS", "LABORATORIO DE APLICACIONES"],
                9 => ["LITERATURA", "INGLÉS", "EDUCACIÓN FÍSICA", "POLÍTICA Y CIUDADANÍA", "HISTORIA", "GEOGRAFÍA", "ANÁLISIS MATEMÁTICO", "SISTEMAS DIGITALES", "BASE DE DATOS", "MODELOS Y SISTEMAS", "LABORATORIO DE PROGRAMACIÓN ||", "LABORATORIO DE REDES INFORMÁTICAS", "LABORATORIO DE DISEÑO WEB", "LAB. DE DISEÑO DE BASE DE DATOS"],
                10 => ["LITERATURA", "INGLÉS", "EDUCACIÓN FÍSICA", "FILOSOFÍA", "ARTE", "MATEMÁTICA DISCRETA", "SISTEMAS DIGITALES", "GESTIÓN Y AUTOGESTIÓN", "SEGURIDAD INFORMÁTICA", "DERECHOS DEL TRABAJADOR", "LAB. DE PROGRAMACIÓN |||", "LAB. DE PROC. INDUSTR.", "DESAR. DE APP. WEB ESTÁTICAS", "DESAR. DE APP. WEB DINÁMICAS"],
                11 => ["PRÁCTICAS PROF./PROGRAMACIÓN", "EMPRENDIM. PRODUC. Y DESARR. LOCAL", "EVALUAC. DE PROYEC.", "MODELOS Y SISTEMAS", "ORGANIZACIÓN Y MÉTODOS", "SISTEMAS COMPUTACIONALES", "DESARR. DE SOFTWARE PARA PLATAF. MOVILES", "IMPLEMEN. DE SITIOS WEB DINÁMICOS"]
            ];
            $materiasT1 = [];
            $materiasT2 = [];
            include("../../db.php");


            $query = mysqli_query($conexion, "SELECT * FROM `tecmu` WHERE DNI='$dni'");

            while ($fetch = mysqli_fetch_array($query)) {
                // Iterar sobre las materias y niveles
                if ($fetch['AÑO'] > 0 && $fetch['AÑO'] <= 3) {
                    $fetch['AÑO'] = ($fetch['AÑO'] == 3) ? 2 : $fetch['AÑO'];
                    $materiasArray = $materiasPorCiclo[$fetch['AÑO']];
                } elseif ($fetch['AÑO'] > 3 && $fetch['ciclo'] == "tecmu") {
                    $materiasArray = $materiasPorCiclo[$fetch['AÑO']];
                } elseif ($fetch['AÑO'] > 3 && $fetch['ciclo'] == "tecpro") {
                    $materiasArray = $materiasPorCiclo[(int) $fetch['AÑO'] + 4];
                }
                ?>
                <table width=100% style="border:1px solid transparent; ">
                    <tr>
                        <td colspan=2 style="background:white; border:1px solid transparent; padding:0px; margin:0px;">
                            <div>

                                <div class=hola
                                    style="display:inline-block; text-align:right; transform: translateY(-13px);">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="background:white; border:1px solid transparent; padding:0px; margin:0px;">
                            <div class="texto" style="transform: translateY(-33px);">
                                <p>ESCUELA:E.E.S.T.N&ordm;3 "NIKOLA TESLA"</p>
                                <p>CICLO LECTIVO:
                                    <?php echo $fecha; ?>
                                </p>
                                <div class="contenedor-nombre">
                                    <p>ESTUDIANTE:</p><input type="text" name="nombre" class="largo"
                                        value="<?php echo $fetch['Nombre']; ?>"> <input type="text" class="largo"
                                        name="apellido" value="<?php echo $fetch['Apellido']; ?>">
                                </div>
                            </div>
                        </td>

                        <td
                            style="background:white; border:1px solid transparent; padding:0px; margin:0px; text-align:right;">
                            <div class="texto" style="transform: translateY(-33px);">
                                <p>DISTRITO: NECOCHEA</p>
                                <p>CICLO <?php echo strtoupper($fetch['ciclo']) ?></p>
                                <p>CURSO:
                                    <?php echo $fetch['CURSO'] ?>
                                </p>
                        </td>
                        <input type="text" hidden name="años" value="<?php echo $fetch['AÑO']; ?>">
                        <input type="text" hidden name="ciclo" value="<?php echo $fetch['ciclo']; ?>">
        </div>
        </td>
        </tr>
        </table>


        <table class=tabla style="transform: translateY(-33px);">
            <thead>
                <tr>
                    <th class="texto-center" rowspan=2 style="width:300px">MATERIAS</th>
                    <td colspan=4 class="hola texto-center ">ESTADO/SITUACION DE LA TRAYECTORIA</td>
                </tr>
                <tr>

                    <td colspan=2 style="width:250px" class="texto-center">1&ordm; CUATRIMESTRE</td>
                    <td colspan=2 class="texto-center" style="width:250px">2&ordm; CUATRIMESTRE</td>

                </tr>
            </thead>

            <tbody>
                <?php
                $longitud = count($materiasArray);
                for ($i = 1; $i <= $longitud; $i++) {
                    $materia = $fetch["materia_{$i}_n1"];
                    $materiasT1[] = $materia;

                    $materia = $fetch["materia_{$i}_n2"];
                    $materiasT2[] = $materia;
                    echo "<tr>";
                    echo "<td class='texto-start'>" . $materiasArray[$i - 1] . "</td>";
                
                    echo "<td colspan=2 class='texto-center'><input type='text' name='materia_{$i}_n1' size='1' value='" . $fetch["materia_{$i}_n1"] . "'></td>";
                
                    echo "<td colspan=2 class='texto-center'><input type='text' name='materia_{$i}_n2' size='1' value='" . $fetch["materia_{$i}_n2"]  . "'></td>";
                
                    echo "</tr>";
                
                }
                ?>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>

                <tr>
                    <td colspan=11></td>
                </tr>
                <tr>
                    <td class="texto-center">MATERIAS PENDIENTES</td>

                </tr>
                <tr>
                    <td style="height:12px; font-size:12px;"> <input type="text" size="1" class="adeuda" name="adeuda1"
                            value="<?php echo "" . $fetch['adeuda_1'] ?>"> </td>

                </tr>
                <tr>
                    <td style="height:12px; font-size:12px;"> <input type="text" size="1" class="adeuda" name="adeuda2"
                            value="<?php echo "" . $fetch['adeuda_2'] ?>"> </td>

                </tr>
                <tr>
                    <td style="height:12px;  font-size:12px;"> <input type="text" size="1" class="adeuda" name="adeuda3"
                            value="<?php echo "" . $fetch['adeuda_3'] ?>"> </td>

                </tr>
                <tr>
                    <td style="height:12px;  font-size:12px;"></td>
                </tr>
                <tr>
                    <td style="height:12px;  font-size:12px;"></td>

                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <br>

    <button type="submit" name="edit" class="btn btn-info pull btn-sm" style="float:right;"><i
            class="fa-solid fa-file-pen"></i></span> Editar boletin</button>
    <br>
    </form>

    </div>
</body>

</html>