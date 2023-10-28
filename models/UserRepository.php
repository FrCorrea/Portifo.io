<?php

namespace models;

use PDO;

require_once('Conexao.php');

class UserRepository {

    private $db;

    public function __construct() {
        $this->db = Conexao::get();
    }

    public function login($email, $password) {
        $query = $this->db->prepare('SELECT * FROM user WHERE email = :email AND password = :password');
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        $query->execute();

        if ($query->rowCount() > 0) {
            $user = $query->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        } else {
            return false;
        }
    }

    public function register($name, $email, $password, $linkedin, $github) {
        try{
            $query = $this->db->prepare('INSERT INTO user (name, email, password, linkedln, github) VALUES (:name, :email, :password, :linkedin, :github)');
            $query->bindParam(':name', $name);
            $query->bindParam(':email', $email);
            $query->bindParam(':password', $password);
            $query->bindParam(':linkedin', $linkedin);
            $query->bindParam(':github', $github);
            $query->execute();

            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        catch(PDOException $e){
            return $e->getMessage("Usuário já existe");
        }

       
    }

    public function emailExists($email) {
        $query = $this->db->prepare('SELECT * FROM user WHERE email = :email');
        $query->bindParam(':email', $email);
        $query->execute();

        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function update($id, $name, $email, $password, $linkedin, $github) {
        $query = $this->db->prepare('UPDATE user SET name = :name, email = :email, password = :password, linkedin = :linkedin, github = :github WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->bindParam(':name', $name);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        $query->bindParam(':linkedin', $linkedin);
        $query->bindParam(':github', $github);
        $query->execute();

        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $query = $this->db->prepare('DELETE FROM user WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

}

?>