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
        
        $produtoModel = new ProdutoModel();
        $produtoModel->setId($_GET['id']);
        $produtos = $produtoModel->selectByCodigo();
        
        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->select("id");
        
        include 'View/Site/produto.php';
    }
    
    function carrinho(){
        
        if(isset($_GET['id'])){
            $_SESSION['carrinho']['produtos'][$_GET['id']] = 1;
        }
                    
        $produtoModel = new ProdutoModel();
        //$produtoModel->setId($_GET['id']);
        $produtos = $produtoModel->selectProdutosCarrinho();
        
        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->select();
        
        include 'View/Site/carrinho.php';
    }
}