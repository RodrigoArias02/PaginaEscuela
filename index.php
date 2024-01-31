<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" type="text/css" href="inicio/css/flatly.css" />
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-1 col-lg-4 col-xl-4">
            
        </div>
        <div class="col-12 col-sm-12 col-md-10 col-lg-4 col-xl-4">
            <br/>
            <div class="card">
                <div class="card-header text-white bg-warning mb-3">
                   Iniciar Sesión
                </div>
                <div class="card-body">
                  <form action="login.php" method="post">

                    <div class = "form-group">
                    <label>Usuario</label>
                    <input type="text" class="form-control" name="usuario" pattern="[a-zA-Z-@-1-2-3-4-5-6-7-8-9-0]+" required  placeholder="Ingrese su usuario aqui">
                    </div>

                    <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" name="password" placeholder="Contraseña" minlength="8" pattern="[a-zA-Z-@-1-2-3-4-5-6-7-8-9-0]+" required>
                    </div>

                    <br/>
                    <button type="submit" class="btn btn-warning text-white">Ingresar</button>
                   </form>
                </div>
            </div>
            
        </div>
        
    </div>
</div>



</body>
</html>