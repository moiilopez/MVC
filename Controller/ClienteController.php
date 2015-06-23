<?php

include_once 'Model/ClienteModel.php';

class ClienteController {

    private $clienteModel;

    public function login() {
        
        if(isset($_POST['username']) && isset($_POST['senha'])) {
            $clienteModel = new ClienteModel();
            $clienteModel->setUsername($_POST['username']);
            $clienteModel->setSenha($_POST['senha']);
            
            $cliente = $clienteModel->verificarLogin();
            if($cliente){
                header("location: index.php?controller=UsuarioController&action=listar");
            }else{
                echo $msg = "nao e posivel acceder";
            }
        }
        include ('View/Site/index.php');    
    }
    
    public function inserir() {
        $msg = FALSE;
        
        if(isset($_POST['username'])){
            $clienteModel = new ClienteModel();
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