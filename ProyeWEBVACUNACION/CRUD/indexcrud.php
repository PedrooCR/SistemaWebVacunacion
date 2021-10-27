<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    
    <link rel="stylesheet" href="CSS/estilocrud.css">
     <!--PARA LOS ICONOS-->
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fas fa-id-badge"></i>
            <h4><?php echo $user->getPaciente(); ?></h4>
        </div>

        <div class="options__menu">	

            <a href="#" class="selected">
                <div class="option">
                    <i class="fas fa-user-check" title="Registrar"></i>
                    <h5>Información de Vacunacion</h5>
                </div>
            </a>

            <a href="#">
                <div class="option">
                <i class="fas fa-user-times" title="Eliminar"></i>
                    <h5>Carnet de Vacunacion</h5>
                </div>
            </a>
            <a href="includes/logout.php">
                <div class="option">
                <i class="fas fa-power-off" title="Power of"></i>
                    <h5>Cerrar Sesion</h5>
                </div>
            </a>
        </div>

    </div>
  
     <table class="table table-sm">
        <tr>
            <td>Paciente: <?php echo $user->getPaciente(); ?> </td>
        </tr>
        <tr>
            <td>Fecha de Nacimiento: <?php echo $user->getFechadenacimiento(); ?>  </td>
        </tr>
        <tr>
            <td> Edad: <?php echo $user->getEdadpa(); ?></td>
        </tr>
    </table>

    <table class="table table-sm">
        <tr>
            <td>1° Dosis </td>
        </tr>
        <tr>
            <td>Fecha: </td>
        </tr>
        <tr>
            <td>Lugar: </td>
        </tr>
    </table>

    <table class="table table-sm">
        <tr>
            <td> 2° Dosis:  </td>
        </tr>
        <tr>
            <td> Fecha: </td>
        </tr>
        <tr>
            <td> Lugar: </td>
        </tr>
    </table>
    <script src="js/script.js"></script>
</body>
</html>