<?php
    include_once 'userpexterno_session.php';

    $userSession = new UserSession();
    $userSession->closeSession();

    header("location: ../indexpexterno.php");

?>