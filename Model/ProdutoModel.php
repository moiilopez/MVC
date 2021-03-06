<?php

include_once 'Model/Model.php';

class ProdutoModel extends Model {

    private $nome;
    private $id;
    public $descricao;
    public $preco;
    private $custo;
    private $quantidade;
    private $categoria;
    private $foto;
            
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getNome() {
        return $this->nome;
    }

    function setNome($produtos) {
        $this->nome = $produtos;
        return $this;
    }
    function getDescricao() {
        return $this->descricao;
    }

    function setDescricao($produtos) {
        $this->descricao = $produtos;
        return $this;
    }
    function getPreco() {
        return $this->preco;
    }

    function setPreco($produtos) {
        $this->preco = $produtos;
        return $this;
    }
    function getCusto() {
        return $this->custo;
    }

    function setCusto($produtos) {
        $this->custo = $produtos;
        return $this;
    }
    function getQuantidade() {
        return $this->quantidade;
    }

    function setQuantidade($produtos) {
        $this->quantidade = $produtos;
        return $this;
    }
    function getCategoria() {
        return $this->categoria;
    }

    function setCategoria($produtos) {
        $this->categoria = $produtos;
        return $this;
    }
    
    function getFoto() {
        return $this->foto;
    }
 
    function setFoto($foto) {
        $this->foto = $foto;
        return $this;
    }

    public function insert() {
        $stmt = $this->conexao->prepare("INSERT INTO produto(NOME,DESCRICAO,PRECO,CUSTO,QUANTIDADE,CATEGORIA, FOTO) "
                . "VALUES (:nome,:descricao,:preco,:custo,:quantidade,:categoria, :foto)");
        
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':descricao', $this->getDescricao());
        $stmt->bindValue(':preco', $this->getPreco());
        $stmt->bindValue(':custo', $this->getCusto());
        $stmt->bindValue(':quantidade', $this->getQuantidade());
        $stmt->bindValue(':categoria', $this->getCategoria());
        $stmt->bindValue(':foto', $this->getFoto());
        
        $stmt->execute();
                
        // Retorna o ultimo ID cadastrado;
        return $this->conexao->lastInsertId();
    }
    

    public function select() {
        $stmt = $this->conexao->prepare(
                "SELECT produto.*, categoria.NOME AS NOMECAT  "
                . "FROM produto "
                . "LEFT JOIN categoria "
                . "ON produto.CATEGORIA = categoria.ID"
        );
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById() {
        $stmt = $this->conexao->prepare("SELECT * FROM produto where ID = :id");
        $stmt->bindValue(':id', $this->getId());
        
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function selectByCategoria() {
        $stmt = $this->conexao->prepare("SELECT * FROM produto where CATEGORIA = :categoria");
        $stmt->bindValue(':categoria', $this->getCategoria());
        
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function update() {
        $stmt = $this->conexao->prepare("UPDATE produto "
                . "SET NOME = :nome, DESCRICAO = :descricao, PRECO = :preco, CUSTO = :custo, QUANTIDADE = :quantidade, CATEGORIA = :categoria "
                . "WHERE ID = :id ");
       
        $stmt->bindValue(':id', $this->getId());
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':descricao', $this->getDescricao());
        $stmt->bindValue(':preco', $this->getPreco());
        $stmt->bindValue(':custo', $this->getCusto());
        $stmt->bindValue(':quantidade', $this->getQuantidade());
        $stmt->bindValue(':categoria', $this->getCategoria());
        
        
        return $stmt->execute();
    }
    
    
    public function delete() {
        $stmt = $this->conexao->prepare("DELETE FROM produto WHERE ID = :id ");
       
        $stmt->bindValue(':id', $this->getId());
        
        
        return $stmt->execute();
    }
    
    
    public function orderByNome() {
        $stmt = $this->conexao->prepare("SELECT * FROM produto order by NOME; ");
       
       $stmt->execute();
        
        return $stmt->fetchAll();
    }
    
    public function selectProdutosCarrinho() {
        
        if(!$_SESSION['carrinho']['produtos']){
            return NULL;
        } 
                
        $produtosIds = '';                
        foreach ($_SESSION['carrinho']['produtos'] as $produto => $prod){
            $produtosIds .= $produto . ',';
        }
        
        $produtosIds = substr($produtosIds, 0, strlen($produtosIds)-1);
        
        $sql = "SELECT * FROM PRODUTO WHERE ID IN ({$produtosIds})";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

}

