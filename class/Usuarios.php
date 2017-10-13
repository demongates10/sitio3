<?php

class Usuarios{
    public $user;
    public $pass;
    public $tipo;
    
    function __construct($user=null, $pass=null, $tipo=null) {
        
        $this->user= $user;
        $this->pass=$pass;
        $this->tipo=$tipo;
    }
    function buscarUsuario(){
        $db = Database::getConnection();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $st = $db->prepare("SELECT * FROM usuarios WHERE user=:user AND pass=md5(:pass) LIMIT 1");
        $st->execute(array('user'=> $this->user, 'pass'=> $this->pass ));
        return $st->fetchAll(PDO::FETCH_CLASS);
    }
    function registrarSesion($row){
        $_SESSION['permitido'] =true;
        $_SESSION['user']=$row[0]->user;
        $_SESSION['tipo']=$row[0]->tipo;
        
    }
    public static function cerrarSesion(){
        session_destroy();
        $_SESSION = array();
    }
}

