<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- PARA AGREGAR LOS ESTILOS -->
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
            <h4><?php echo $user->getPersonalexterno(); ?></h4>
        </div>

        <div class="options__menu">	

            <a href="index.php" class="option">
                <div class="option">
                    <i class="fas fa-user-check" title="Registrar"></i>
                    <h5>Registrar Paciente</h5>
                </div>
            </a>

            <a href="#">
                <div class="option">
                <i class="fas fa-user-times" title="Eliminar"></i>
                    <h5>Eliminar datos del Paciente</h5>
                </div>
            </a>
            
            <a href="#">
                <div class="option">
                    <i class="fas fa-user-edit" title="Modificar"></i>
                    <h5>Modificar datos del paciente</h5>
                </div>
            </a>

            <a href="#">
                <div class="option">
                <i class="fas fa-search" title="Buscar"></i>
                    <h5>Buscar Paciente</h5>
                </div>
            </a>

            <a href="#">
                <div class="option">
                <i class="fas fa-question"></i>
                    <h5>Sin nombre</h5>
                </div>
            </a>

            <a href="includes/logoutpexterno.php">
                <div class="option">
                <i class="fas fa-power-off" title="Power of"></i>
                    <h5>Cerrar Sesion</h5>
                </div>
            </a>

        </div>

    </div>
  
     <table class="table table-sm">
        <tr>
            <td>Bienvenido Personal externo: <?php echo $user->getPersonalexterno(); ?> </td>
        </tr>
    </table>
    <script src="js/script.js"></script>
</body>
</html>