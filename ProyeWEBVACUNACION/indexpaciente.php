<?php

include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "Hay sesión";
    $user->setUser($userSession->getCurrentUser());
    include_once 'CRUD/indexcrud.php';
}else if(isset($_POST['numerodni']) && isset($_POST['fechaemision'])){
    //echo "Validación de login";

    $userForm = $_POST['numerodni'];
    $passForm = $_POST['fechaemision'];

    if($user->userExists($userForm, $passForm)){
        //echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'CRUD/indexcrud.php';
    }else{
        //echo "nombre de usuario y/o password incorrecto";
        $errorLogin = "Nombre de usuario y/o password es incorrecto";
        include_once 'Packlogin/login.php';
    }
}else{
    //echo "Login";
    include_once 'Packlogin/login.php';
}

?>