<?php

require('Conexao.php');

class UserRepository {

    public function login($email, $password) {
        $db = Conexao::get();
        $query = $this->db->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
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
        $db = Conexao::get();
        $query = $this->db->prepare('INSERT INTO users (name, email, password, linkedin, github) VALUES (:name, :email, :password, :linkedin, :github)');
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

    public function update($id, $name, $email, $password, $linkedin, $github) {
        $db = Conexao::get();
        $query = $this->db->prepare('UPDATE users SET name = :name, email = :email, password = :password, linkedin = :linkedin, github = :github WHERE id = :id');
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
        $db = Conexao::get();
        $query = $this->db->prepare('DELETE FROM users WHERE id = :id');
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