<?php

include_once 'conexionbd/db.php';

class User extends DB{
  
    private $personalexterno;
   
    public function userExists($nombrepe, $clave){
        //$md5pass = md5($pass); <--- PARA PONER SEGURIDAD A LA CONTRASEÑA

        $query = $this->connect()->prepare('SELECT * FROM personalexternos WHERE Pexternonombre = :nombrepe AND Pexternocontraseña = :clave');
        $query->execute(['nombrepe' => $nombrepe, 'clave' => $clave]); 
        //$query->execute(['user' => $user, 'pass' => $md5pass]); 

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM personalexternos WHERE Pexternonombre = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->personalexterno = $currentUser['Pexternonombre'];
        }
    }

    public function getPersonalexterno(){
        return $this->personalexterno;
    }
}

?>