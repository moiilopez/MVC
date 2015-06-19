<?php

include_once 'Model/ClienteModel.php';

class ClienteController {

    private $clienteModel;

    public function login() {
        
        if(isset($_POST['username']) && isset($_POST['senha'])) {
            $clienteModel = new UsuarioModel();
            $clienteModel->setUsername($_POST['username']);
            $clienteModel->setSenha($_POST['senha']);
            
            $cliente = $clienteModel->verificarLogin();
            if($cliente){
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
            $clienteModel = new UsuarioModel();
            $clienteModel->setUsername($_POST['username']);
            $clienteModel->setEmail($_POST['email']);
            $clienteModel->setSenha($_POST['senha']);
            
            if($clienteModel->insert()) {
                 $msg = "Registro cadastrado com sucesso!";
            } else {
                $msg = "Erro ao cadastrar!";
            }
                       
        }
        
        include('View/Site/inserirCliente.php');
    }
}