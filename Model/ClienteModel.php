<?php

include_once 'Model/Model.php';

class ClienteModel extends Model {

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
    }