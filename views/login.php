<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inicio de Sesión</title>
</head>

<body>
    <div class="content container-fluid col-md-6 mt-5">
        <div class="mb-3 ">
            <label for="email">Correo</label>
            <input type="text" id="email" name="email" placeholder="Ingresa tu correo" class="form-control">
        </div>
        <div class="mb-3 ">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" class="form-control">
        </div>
        <div class="mb-3  d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mb-3">Iniciar Sesión</button>
        </div>

        <div class="row text-center">
            <a href="register.php">¿Aún no tienes cuenta? ¡Registrate ahora!</a>
            <a href="forgot_password.php">¿Olvidaste tu contraseña? ¡Recuperala aquí!</a>
        </div>
    </div>

</body>

</html>