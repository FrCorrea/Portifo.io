
<?php

require_once('Conexao.php');


class ProjectRepository {

    private $db;

    public function __construct() {
        $this->db = Conexao::get();
    }

    public function getPublicRepositories(){

        $query = $this->db->prepare('SELECT * FROM projects WHERE security = public');
        $query->execute();

        if ($query->rowCount() > 0) {
            $projects = $query->fetchAll(PDO::FETCH_ASSOC);
            return $projects;
        } else {
            return false;
        }
    }

    public function getRepositoryById($id){

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

    public function getRepositoryByUser($userId){
 
        $query = $this->db->prepare('SELECT * FROM projects WHERE user_id = :user_id');
        $query->bindValue(':user_id', $userId);
        $query->execute();

        if ($query->rowCount() > 0) {
            $projects = $query->fetchAll(PDO::FETCH_ASSOC);
            return $projects;
        } else {
            return false;
        }
    }

    public function addRepository($project){

        $query = $this->db->prepare('INSERT INTO projects (name, type, security, description, user_id) VALUES (:name, :type, :security, :description, :user_id)');
        $query->bindParam(':name', $project->getName());
        $query->bindParam(':type', $project->getType());
        $query->bindParam(':security', $project->getSecurity());
        $query->bindParam(':description', $project->getDescription());
        $query->bindParam(':user_id', $project->getUser_id());
        $query->execute();

        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateRepository($project){

        $query = $this->db->prepare('UPDATE projects SET name = :name, type = :type, security = :security, description = :description WHERE id = :id');
        $query->bindParam(':id', $project->getId());
        $query->bindParam(':name', $project->getName());
        $query->bindParam(':type', $project->getType());
        $query->bindParam(':security', $project->getSecurity());
        $query->bindParam(':description', $project->getDescription());
        $query->execute();

        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteRepository($id){

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