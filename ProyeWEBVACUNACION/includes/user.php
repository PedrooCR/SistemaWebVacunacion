<?php

include_once 'conexionbd/db.php';

class User extends DB{
   
    private $paciente;
    private $fechadenacimiento;
    private $edadpa;
    

    public function userExists($numdni, $femision){
        //$md5pass = md5($pass); <--- PARA PONER SEGURIDAD A LA CONTRASEÑA

        $query = $this->connect()->prepare('SELECT * FROM pacientes WHERE Pacientedni = :numdni AND Pacientedniemision = :femision');
        $query->execute(['numdni' => $numdni, 'femision' => $femision]); 
        //$query->execute(['user' => $user, 'pass' => $md5pass]); 

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM pacientes WHERE Pacientedni = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->paciente = $currentUser['Pacientenombre'];
            $this->fechadenacimiento = $currentUser['PacienteFechaNac'];
            $this->edadpa = $currentUser['Pacienteedad'];
        }
    }

    public function getPaciente(){
        return $this->paciente;
    }

    public function getFechadenacimiento(){
        return $this->fechadenacimiento;
    }
    public function getEdadpa(){
        return $this->edadpa;
    }
}

?>