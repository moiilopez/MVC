<?php

include_once 'Model/Model.php';

class UsuarioModel extends Model {

    private $username;
    private $senha;
    public $email;
    private $id;
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getUsername() {
        return $this->username;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    function setSenha($senha) {
        $this->senha = $senha;
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Método para salvar um usuário no banco de dados
     * @access public
     * @param 
     * @return void
     */
    public function insert() {
        $stmt = $this->conexao->prepare("INSERT INTO usuario (username, senha, email) VALUES (:username, :senha, :email)");
        
        $stmt->bindValue(':username', $this->getUsername());
        $stmt->bindValue(':senha', $this->getSenha());
        $stmt->bindValue(':email', $this->getEmail());
        
        return $stmt->execute();
    }
    
    /**
     * Método para retornar todos os usúarios do banco de dados
     * @access public
     * @param 
     * @return array
     */
    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM usuario");
        $stmt->execute();

        return $stmt->fetchAll();
    }
    
        /**
     * Método para retornar todos o usúario do banco de dados pelo id
     * @access public
     * @param 
     * @return array
     */
    public function selectById() {
        $stmt = $this->conexao->prepare("SELECT * FROM usuario where ID = :id");
        $stmt->bindValue(':id', $this->getId());
        
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function update() {
        $stmt = $this->conexao->prepare("UPDATE  usuario SET username = :username, senha = :senha, email = :email  WHERE id = :id ");
       
        $stmt->bindValue(':id', $this->getId());
        $stmt->bindValue(':username', $this->getUsername());
        $stmt->bindValue(':senha', $this->getSenha());
        $stmt->bindValue(':email', $this->getEmail());
        
        return $stmt->execute();
    }
    
    
    public function delete() {
        $stmt = $this->conexao->prepare("DELETE FROM usuario WHERE ID = :id ");
       
        $stmt->bindValue(':id', $this->getId());
        
        
        return $stmt->execute();
    }
    
    
    public function orderbyUsername() {
        $stmt = $this->conexao->prepare("SELECT * FROM usuario order by username; ");
       
       $stmt->execute();
        
        return $stmt->fetchAll();
    }
    
   public function orderbyEmail() {
        $stmt = $this->conexao->prepare("SELECT * FROM usuario order by email; ");
       
       $stmt->execute();
        
        return $stmt->fetchAll();
    }
   
    public function verificarLogin() {
       $stmt = $this->conexao->prepare("SELECT * FROM usuario WHERE username = :username && senha = :senha ");
       $stmt->bindValue(':username', $this->getUsername());
       $stmt->bindValue(':senha', $this->getUsername());
       $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    
}

