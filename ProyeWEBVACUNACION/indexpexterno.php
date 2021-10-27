<?php
include_once 'includes/userpexterno.php';
include_once 'includes/userpexterno_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "Hay sesión";
    $user->setUser($userSession->getCurrentUser());
    include_once 'CRUD/crudpexterno.php';
}else if(isset($_POST['nombreusuario']) && isset($_POST['contraseña'])){
    //echo "Validación de login";

    $userForm = $_POST['nombreusuario'];
    $passForm = $_POST['contraseña'];

    if($user->userExists($userForm, $passForm)){
        //echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'CRUD/crudpexterno.php';
    }else{
        //echo "nombre de usuario y/o password incorrecto";
        $errorLogin = "Nombre de usuario y/o password es incorrecto";
        include_once 'Packlogin/loginpexterno.php';
    }
}else{
    //echo "Login";
    include_once 'Packlogin/loginpexterno.php';
}

?>