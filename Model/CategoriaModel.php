<?php

include_once 'Model/Model.php';

class CategoriaModel extends Model {

    public $nome;
    private $id;
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getNome() {
        return $this->nome;
    }

    function setNome($categorias) {
        $this->nome = $categorias;
        return $this;
    }

    public function insert() {
        $stmt = $this->conexao->prepare("INSERT INTO categoria(nome) VALUES (:nome)");
        
        $stmt->bindValue(':nome', $this->getNome());
        
        return $stmt->execute();
    }
    

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM categoria");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById() {
        $stmt = $this->conexao->prepare("SELECT * FROM categoria where ID = :id");
        $stmt->bindValue(':id', $this->getId());
        
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function update() {
        $stmt = $this->conexao->prepare("UPDATE categoria SET NOME = :nome WHERE id = :id ");
       
        $stmt->bindValue(':id', $this->getId());
        $stmt->bindValue(':nome', $this->getNome());
        
        return $stmt->execute();
    }
    
    
    public function delete() {
        $stmt = $this->conexao->prepare("DELETE FROM categoria WHERE ID = :id ");
       
        $stmt->bindValue(':id', $this->getId());
        
        
        return $stmt->execute();
    }
    
    
    public function orderByNome() {
        $stmt = $this->conexao->prepare("SELECT * FROM categoria order by nome; ");
       
       $stmt->execute();
        
        return $stmt->fetchAll();
    }

}

