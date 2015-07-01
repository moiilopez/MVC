<?php

class SiteController {
    
    function index(){
        
        $produtoModel = new ProdutoModel();
        $produtos = $produtoModel->select();
        
        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->select("id");
        
        include 'View/Site/Index.php';
    }
    
    function clasificar(){
        
        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->select("id");
        
        if(isset($_GET['categoria'])){
            $produtoModel = new ProdutoModel();
            $produtoModel->setCategoria($_GET['categoria']);
            $categoriaProdutos = $produtoModel->selectByCategoria();
        }
        
        include 'View/Site/productosClasificados.php';
    }
    
    function produto(){
        
         if (!isset($_GET['id'])) {
            die('Falta o ID na URL');
        }
        $produtoModel = new ProdutoModel();
        $produtoModel->setId($_GET['id']);
        $produtos = $produtoModel->selectById();
        
        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->select("id");
        
        include 'View/Site/produto.php';
    }
    
    function carrinho(){
        
        if(isset($_GET['id'])){
            $_SESSION['carrinho']['produtos'][$_GET['id']] = 1;
        }
        
        if (isset($_GET['idRemover'])) {
            unset($_SESSION['carrinho']['produtos'][$_GET['idRemover']]);
        }
        
        $produtoModel = new ProdutoModel();
        $produtos = $produtoModel->selectProdutosCarrinho();
        
        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->select();
        
        include 'View/Site/carrinho.php';
    }
}