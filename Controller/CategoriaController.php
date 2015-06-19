<?php

include_once 'Model/CategoriaModel.php';

class CategoriaController {

    private $categoriaModel;

    public function inserir() {
        $msg = FALSE;
        
        if(isset($_POST['nome'])){
            $categoriaModel = new CategoriaModel();
            $categoriaModel->setNome($_POST['nome']);
            
            if($categoriaModel->insert()) {
                 $msg = "Categoria registrada com sucesso!";
            } else {
                $msg = "Erro ao cadastrar!";
            }
                       
        }
        
        include('View/Categoria/inserirCat.php');
    }

    public function deletar() {
        
        $msg = FALSE;
        if  ($_GET['id']){
             $categoriaModel = new CategoriaModel();
            $categoriaModel->setId($_GET['id']);
            
       
            if ($categoriaModel->delete()){
                 $msg = "Registro deletado com sucesso";
             } else {
                  $msg = "Erro ao deletar";
             }
            
        }
        include('View/Categoria/deletarCat.php');
    }
    
    

    public function listar() {
        
        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->select();
        
        include('View/Categoria/listarCat.php');
    }
    
    
    public function atualizar() {
        
         $categoriaModel = new CategoriaModel();
         $msg = '';
         
         if(isset($_POST['nome'])){
             $categoriaModel->setId($_GET['id']);
             $categoriaModel->setNome($_POST['nome']);
         
             if ($categoriaModel->update()){
                 $msg = "Registro atualizado com sucesso";
             } else {
                  $msg = "Erro ao atualizar";
             }
             
         }
        if($_GET['id']) {
            $categoriaModel->setId($_GET['id']);
            $categorias = $categoriaModel->selectById();
        }
         include('View/Categoria/atualizarCat.php');

    }

    public function ordenarNome() {
       $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->orderbyNome();
       
       include('View/Categoria/listarCat.php');
        }
       
}
