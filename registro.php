<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="estilos/estilo1.css">
</head>
<body>
<header>
    <h1>Social Network</h1>
</header>
<main>
    <form id="registro" name="registro" action="login.php" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre"><br><br>
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido"><br><br>
            <label for="username">Nombre de usuario</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="pass">Contraseña</label>
            <input type="password" id="pass" name="pass"><br><br>
            <label for="passconf">Confirme su contraseña</label>
            <input type="password" id="passconf" name="passconf"><br><br>
            <button>Enviar</button>
        </div>
    </form>
</main>
<br><br><br>
<a href="registro.php">Registrarse</a>
</body>
</html>