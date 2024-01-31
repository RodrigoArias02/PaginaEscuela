<?php
#obtener las variables de entorno
// Cargar las variables de entorno desde el archivo .env
$env_file = __DIR__ . '/.env';
if (file_exists($env_file)) {
    $env = file_get_contents($env_file);
    $env_lines = explode("\n", $env);
    foreach ($env_lines as $line) {
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value);
            putenv("$key=$value");
        }
    }
}

// Acceder a las variables de entorno
$user = getenv('USER');
$password = getenv('PASSWORD');

# Las claves de acceso, ahorita las ponemos aquí
# y en otro ejercicio las ponemos en una base de datos
$usuario_correcto = $user;
$palabra_secreta_correcta = $password;
/*
Para leer los datos que fueron enviados al formulario,
accedemos al arreglo superglobal llamado $_POST en PHP, y
para obtener un valor accedemos a $_POST["clave"] en donde
clave es el "name" que le dimos al input
 */
# Nota: no estamos haciendo validaciones
$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["password"];

# Luego de haber obtenido los valores, ya podemos comprobar:
if ($usuario === $usuario_correcto && $palabra_secreta === $palabra_secreta_correcta) {
    # Significa que coinciden, así que vamos a guardar algo
    # en el arreglo superglobal $_SESSION, ya que ese arreglo
    # "persiste" a través de todas las páginas

    # Iniciar sesión para poder usar el arreglo
    session_start();
    # Y guardar un valor que nos pueda decir si el usuario
    # ya ha iniciado sesión o no. En este caso es el nombre
    # de usuario
    $_SESSION["usuario"] = $usuario;

    # Luego redireccionamos a la página "Secreta"
    header("Location: inicio/inicio.php");
} else {
    # No coinciden, así que simplemente imprimimos un
    # mensaje diciendo que es incorrecto
    ?>
    <script>
        alert("el usuario o la contraseña son incorrectos")
        window.location.replace('index.php');
    </script>
<?php
}
