<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Personal Externo</title>

    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
<img class="wave" src="img/Fondopararegistro.png">
        <div class="container">
		<div class="img">
			<!-- <img src="img/vacunacion-illustration.png"> -->
		</div>
        <div class="login-content">
        <form action="" method="POST" class="form-box">

        <img src="img/avatar.svg">
        <h3 class="form-title">PORTAL DE PERSONAL EXTERNO</h3>
        <label class="form-label">Nombre usuario<input type="text" name="nombreusuario"></label>
        <label class="form-label">Contraseña<input type="password" name="contraseña"></label>
        <button type="submit">
            Continuar
        </button>
        <button type="submit">
            <a href="menuprincipal.php"> Volver al Menu
        </button>
        <label class="errorlogin">
        <?php

        if(isset($errorLogin)){
          echo $errorLogin;
        }

        ?>
        </label>
    </form>
</body>
</html>