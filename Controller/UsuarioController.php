<?php

include_once 'Model/UsuarioModel.php';

class UsuarioController {

    private $usuarioModel;

    public function login() {
        
        if(isset($_POST['username']) && isset($_POST['senha'])) {
            $usuarioModel = new UsuarioModel();
            $usuarioModel->setUsername($_POST['username']);
            $usuarioModel->setSenha($_POST['senha']);
            
            session_start();

            $_SESSION["usuario"] = $usuarioModel->verificarLogin();
            if($_SESSION["usuario"]){
                header("location: index.php?controller=UsuarioController&action=listar");
            }else{
                $msg = "nao e posivel acceder";
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

    public function deletar() {
        
        $msg = FALSE;
        if  ($_GET['id']){
             $usuarioModel = new UsuarioModel();
            $usuarioModel->setId($_GET['id']);
            
       
            if ($usuarioModel->delete()){
                 $msg = "Registro deletado com sucesso";
             } else {
                  $msg = "Erro ao deletar";
             }
            
        }
        include('View/Usuario/deletar.php');
    }
    
    

    public function listar() {
        
        $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->select();
        
        include('View/Usuario/listar.php');
    }
    
    
    public function atualizar() {
        
         $usuarioModel = new UsuarioModel();
         $msg = '';
         
         if(isset($_POST['username']) && ($_POST['email']) && ($_POST['senha'])) {
             $usuarioModel->setId($_GET['id']);
             $usuarioModel->setUsername($_POST['username']);
             $usuarioModel->setEmail($_POST['email']);
             $usuarioModel->setSenha($_POST['senha']);
         
             if ($usuarioModel->update()){
                 $msg = "Registro atualizado com sucesso";
             } else {
                  $msg = "Erro ao atualizar";
             }
             
         }
        if($_GET['id']) {
            $usuarioModel->setId($_GET['id']);
            $usuario = $usuarioModel->selectById();
        }
         include('View/Usuario/atualizar.php');

    }

    public function ordenarUsername() {
       $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->orderbyUsername();
       
       include('View/Usuario/listar.php');
        }
       
     public function ordenarEmail() {
       $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->orderbyEmail();
       
       include('View/Usuario/listar.php');
        }
        
        
        
        
        
}
