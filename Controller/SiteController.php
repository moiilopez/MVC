<?php

class SiteController {
    
    function index(){
        
        $produtoModel = new ProdutoModel();
        $produtos = $produtoModel->select("id");
        
        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->select("id");
        
        include 'View/Site/Index.php';
    }
}