<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>

    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
        <img class="wave" src="img/msaludvacunacion.png">
        <div class="container">
		<div class="img">
			<img src="img/vacunacion-illustration.png">
		</div>
        <div class="login-content">
        <form action="" method="POST" class="form-box">
        

        <img src="img/avatar.svg">
        <h3 class="form-title">Portal del Paciente</h3>
        <label class="form-label">Tipo de Documento</label>
            <select name="" id="combobox">
                <option class="form-label">DNI</option>
                <option class="form-label">Carnet de Extranjeria</option>
            </select>
        <label class="form-label">Numero de documento<input type="text" name="numerodni"></label>
        <label class="form-label">Fecha de Emision<input type="date" name="fechaemision"></label>
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