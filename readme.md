# README

## Descripción del Proyecto

Este proyecto es la página web oficial de la escuela, diseñada para gestionar el registro de alumnos y la creación de boletines. Proporciona funcionalidades para realizar altas, bajas y modificaciones tanto en la base de datos de alumnos como en la de boletines. Además, los usuarios pueden consultar la información de los alumnos y los boletines almacenados.

Los boletines generados están disponibles en formato PDF para su descarga. Para la generación de PDFs, se utiliza la librería Dompdf.

El sistema utiliza MySQL como gestor de base de datos y se ejecuta en el entorno de desarrollo XAMPP, utilizando el módulo de Apache para el servidor web.

## Funcionalidades Principales

- **Gestión de Alumnos**:
  - Alta, baja y modificación de alumnos.
  - Consulta de información de alumnos.

- **Gestión de Boletines**:
  - Creación de boletines.
  - Alta, baja y modificación de boletines.
  - Consulta de boletines generados.
  - Generación de boletines en formato PDF para descarga.

## Tecnologías Utilizadas

- **Lenguaje de Programación**: PHP
- **Gestor de Base de Datos**: MySQL
- **Librería para PDFs**: Dompdf
- **Entorno de Desarrollo**: XAMPP
- **Servidor Web**: Apache

## Instalación y Configuración

1. Descarga e instala XAMPP desde [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
2. Clona el repositorio del proyecto en tu directorio de trabajo.
3. Configura la conexión a la base de datos MySQL en el archivo de configuración.
4. Importa la estructura de la base de datos proporcionada en el archivo `database.sql`.
5. Asegúrate de que el servidor Apache esté en funcionamiento.
6. Accede al proyecto a través de tu navegador web.

## Uso

Una vez que hayas configurado y lanzado el proyecto, podrás acceder a las siguientes funcionalidades a través de la interfaz web:

- Gestión de Alumnos: Permite agregar, eliminar y modificar registros de alumnos, así como consultar la información almacenada.
- Gestión de Boletines: Permite generar boletines, gestionarlos (agregar, eliminar y modificar) y consultarlos. Además, podrás descargar los boletines en formato PDF.

## Descarga e Integración de Dompdf

Dompdf es una biblioteca PHP que te permite generar archivos PDF desde HTML y CSS. Aquí hay un atajo para descargar y empezar a usar Dompdf en tu proyecto:

1. **Descarga Dompdf**: Visita el [repositorio oficial de Dompdf en GitHub](https://github.com/dompdf/dompdf) y descarga la última versión del código fuente.

2. **Integración en tu Proyecto**:
   - Descomprime el archivo descargado en tu proyecto.
   - Asegúrate de que el directorio de Dompdf esté accesible para tu aplicación PHP.
   - Asegúrate de que la carpeta dompdf este dentro de la carpeta inicio.

3. **Uso Básico**:
   - Para generar un PDF, simplemente incluye Dompdf en tu script PHP y usa su API para renderizar el contenido HTML en un archivo PDF.

   ```php
   <?php
   require_once 'dompdf/autoload.inc.php';

   use Dompdf\Dompdf;

   // Crea una instancia de Dompdf
   $dompdf = new Dompdf();

   // Renderiza el HTML como PDF
   $dompdf->loadHtml('<h1>Hola, mundo!</h1>');

   // Renderiza el PDF
   $dompdf->render();

   // Genera el PDF en la salida
   $dompdf->stream('documento.pdf');
   ?>
