<?php

include_once 'Model/ClienteModel.php';

class ClienteController {

    private $clienteModel;

    public function login() {
        
        if(isset($_POST['username']) && isset($_POST['senha'])) {
            $clienteModel = new ClienteModel();
            $clienteModel->setUsername($_POST['username']);
            $clienteModel->setSenha($_POST['senha']);
            
            session_start();

            $_SESSION["cliente"] = $clienteModel->verificarLogin();
            
            if($_SESSION["cliente"]){

                header("location: index.php");
            }
        }
        header("location: index.php");   
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