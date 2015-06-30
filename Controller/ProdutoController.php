<?php

include_once 'Model/ProdutoModel.php';

class ProdutoController {

    private $produtoModel;

    public function inserir() {
        $msg = FALSE;
        
        if(isset($_POST['nome'])){
            $produtoModel = new ProdutoModel();
            $produtoModel->setNome($_POST['nome']);
            $produtoModel->setDescricao($_POST['descricao']);
            $produtoModel->setPreco($_POST['preco']);
            $produtoModel->setCusto($_POST['custo']);
            $produtoModel->setQuantidade($_POST['quantidade']);
            $produtoModel->setCategoria($_POST['categoria']);
            
            if($produtoModel->insert()) {
                 $msg = "Registro cadastrado com sucesso!";
            } else {
                $msg = "Erro ao cadastrar!";
            }
                       
        }
        
        $categoria = new CategoriaModel();
        $categorias = $categoria->select();
        
        include('View/Produto/inserirPro.php');
    }

    public function deletar() {
        
        $msg = FALSE;
        if  ($_GET['id']){
            $produtoModel = new ProdutoModel();
            $produtoModel->setId($_GET['id']);
            
       
            if ($produtoModel->delete()){
                 $msg = "Registro deletado com sucesso";
             } else {
                  $msg = "Erro ao deletar";
             }
            
        }
        include('View/Produto/deletarPro.php');
    }
    
    

    public function listar() {
        
        $produtoModel = new ProdutoModel();
        $produtos = $produtoModel->select();
        
        include('View/Produto/listarPro.php');
    }
    
    
    public function atualizar() {
        
         $produtoModel = new ProdutoModel();
         $msg = '';
         
         if(isset($_POST['nome']) && ($_POST['descricao']) && ($_POST['preco']) && ($_POST['custo']) && ($_POST['quantidade'])) {
             $produtoModel->setId($_GET['id']);
             $produtoModel->setNome($_POST['nome']);
             $produtoModel->setDescricao($_POST['descricao']);
             $produtoModel->setPreco($_POST['preco']);
             $produtoModel->setCusto($_POST['custo']);
             $produtoModel->setQuantidade($_POST['quantidade']);
             $produtoModel->setCategoria($_POST['categoria']);
         
             if ($produtoModel->update()){
                 $msg = "Registro atualizado com sucesso";
             } else {
                  $msg = "Erro ao atualizar";
             }
             
         }
        if($_GET['id']) {
            $produtoModel->setId($_GET['id']);
            $produtos = $produtoModel->selectById();
        }
        
        $categoria = new CategoriaModel();
        $categorias = $categoria->select();
        
         include('View/Produto/atualizarPro.php');
       // print_r($usuario);
    }

    public function ordenarNome() {
        $produtoModel = new ProdutoModel();
        $produtos = $produtoModel->orderByNome();
       
        include('View/Produto/listarPro.php');
        }
       
//    public function ordenarEmail() {
//        $produtoModel = new ProdutoModel();
//        $usuarios = $produtoModel->orderbyEmail();
//       
//        include('View/Produto/listar.php');
//        }
}
