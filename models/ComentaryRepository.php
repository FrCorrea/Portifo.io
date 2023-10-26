<?php

    require('Conexao.php');

    class ComentaryRepository {

        private $db;

        public function __construct() {
            $this->db = Conexao::get();
        }

        public function getComentariesByProject($projectId){
            $query = $this->db->prepare('SELECT * FROM comentaries WHERE project_id = :project_id');
            $query->bindValue(':project_id', $projectId);
            $query->execute();

            if ($query->rowCount() > 0) {
                $comentaries = $query->fetchAll(PDO::FETCH_ASSOC);
                return $comentaries;
            } else {
                return false;
            }
        }

        public function addComentary($comentary){
            $query = $this->db->prepare('INSERT INTO comentaries (comentary, user_id, project_id) VALUES (:comentary, :user_id, :project_id)');
            $query->bindParam(':comentary', $comentary->getComentary());
            $query->bindParam(':user_id', $comentary->getUser_id());
            $query->bindParam(':project_id', $comentary->getProject_id());
            $query->execute();

            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function deleteComentary($id){
            $query = $this->db->prepare('DELETE FROM comentaries WHERE id = :id');
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