<?php

namespace models;

use PDO;

require_once('Conexao.php');


class ProjectRepository {

    private $db;

    public function __construct() {
        $this->db = Conexao::get();
    }


    //home page
    public function getPublicProjects(){

        $query = $this->db->prepare("SELECT * FROM projects WHERE security = 'public'");
        $query->execute();

        if ($query->rowCount() > 0) {
            $projects = $query->fetchAll(PDO::FETCH_ASSOC);
            return $projects;
        } else {
            return false;
        }
    }

    public function getProjectByName($name){
            
            $query = $this->db->prepare("SELECT * FROM projects WHERE name = :name AND security = 'public'");
            $query->bindValue(':name', $name);
            $query->execute();
    
            if ($query->rowCount() > 0) {
                $project = $query->fetch(PDO::FETCH_ASSOC);
                return $project;
            } else {
                return false;
            }
    }



    public function getProjectsById($id){
        $query = $this->db->prepare('SELECT * FROM projects WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();

        if ($query->rowCount() > 0) {
            $project = $query->fetch(PDO::FETCH_ASSOC);
            return $project;
        } else {
            return false;
        }
    }

    public function getProjectsByUserId(){
        $query = $this->db->prepare('SELECT * FROM projects WHERE user_id = :id');
        $query->bindValue(':id', $_SESSION['user']);
        $query->execute();

        if ($query->rowCount() > 0) {
            $projects = $query->fetchAll(PDO::FETCH_ASSOC);
            return $projects;
        } else {
            return false;
        }
    }

    public function addProject($name, $type, $security, $description, $userId){

        $query = $this->db->prepare('INSERT INTO projects (name, type, security, description, user_id) VALUES (:name, :type, :security, :description, :user_id)');
        $query->bindParam(':name', $name);
        $query->bindParam(':type', $type);
        $query->bindParam(':security', $security);
        $query->bindParam(':description', $description);
        $query->bindParam(':user_id', $userId);
        $query->execute();

        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function updateProject($id, $name, $type, $description){
        $query = $this->db->prepare('UPDATE projects SET name = :name, type = :type, description = :description WHERE id = :id');
        $query->bindParam(':name', $name);
        $query->bindParam(':type', $type);
        $query->bindParam(':description', $description);
        $query->bindParam(':id', $id);
        $query->execute();

        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteProject($id){

        $query = $this->db->prepare('DELETE FROM projects WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

}