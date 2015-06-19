<?php

include_once 'Model/ClienteModel.php';

class UsuarioController {

    private $clienteModel;

    public function login() {
        
        if(isset($_POST['username']) && isset($_POST['senha'])) {
            $usuarioModel = new UsuarioModel();
            $usuarioModel->setUsername($_POST['username']);
            $usuarioModel->setSenha($_POST['senha']);
            
            $usuario = $usuarioModel->verificarLogin();
            if($usuario){
                header("location: index.php?controller=UsuarioController&action=listar");
            }else{
                echo $msg = "nao e posivel acceder";
            }
        }
        include ('View/Usuario/login.php');    
    }
    
    public function inserir() {
        $msg = FALSE;
        
        if(isset($_POST['username'])){
            $usuarioModel = new UsuarioModel();
            $usuarioModel->setUsername($_POST['username']);
            $usuarioModel->setEmail($_POST['email']);
            $usuarioModel->setSenha($_POST['senha']);
            
            if($usuarioModel->insert()) {
                 $msg = "Registro cadastrado com sucesso!";
            } else {
                $msg = "Erro ao cadastrar!";
            }
                       
        }
        
        include('View/Usuario/inserir.php');
    }
}