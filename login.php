<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/custom.css">
	<script src="./js/custom.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="imagenfondo">
    <section>
        <form method="post" action="/examenfinal/php/ingresar.php" class="cuadrologuin" id="cuadroingreso">
            <img src="./img/logo-G.png" alt="">
            <h1>Ingresa</h1>
            <ul>
                <li><input type="email" name="correo" placeholder="Ingresa tu correo"></li>
                <li><input type="password" name="contrasena" placeholder="Ingresa contraseña"></li>
                <li><input type="submit" name="enviar" placeholder="Enviar" id="botonenviar"/></li>
                <li class="enlace"><a href="#" id="enlace-registro">Registrarse</a></li>
            </ul>
            
        </form>
        <form method="post" action="/examenfinal/php/crear.php" class="cuadrologuin" id="cuadroregistro" enctype="multipart/form-data">
            <img src="./img/logo-G.png" alt="">
            <h1>Registrate</h1>
            <ul>
                <li><input type="text" name="nombre" placeholder="Ingresa tus nombres"></li>
                <li><input type="text" name="apellido" placeholder="Ingresa tus apellidos"></li>
                <li><input type="email" name="correo" placeholder="Ingresa tu correo"></li>
                <li><input type="password" name="contrasena" placeholder="Ingresa contraseña"></li>
                <li><input type="submit" name="enviar" placeholder="Enviar" id="botonenviar"/></li>
                <li class="enlace"><a href="#" id="enlace-inicio">Iniciar seccion</a></li>
            </ul>
        </form>
    </section>
</body>
</html>