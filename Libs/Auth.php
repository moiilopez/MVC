<?php

class Auth {
    static function bloquearAcesso(){
        if(!isset($_SESSION['usuario'])){
            header('Location: index.php?controller=UsuarioController&action=Login');
        }
    }
}
