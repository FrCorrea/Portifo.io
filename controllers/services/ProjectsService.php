<?php
    namespace services;

    require_once('models/ProjectRepository.php');

    class ProjectService {

        private $projectRepository;

        public function __construct(){
            $this->projectRepository = new \models\ProjectRepository();
        }


        public function getPublicProjects(){
            return $this->projectRepository->getPublicProjects();
        }

        public function getProjectByName($name){
            return $this->projectRepository->getProjectByName($name);
        }
     
        public function getProjectByUserId(){
            return $this->projectRepository->getProjectsByUserId();
        }

        public function addProject($name, $type, $security, $description, $userId){
            echo " E4NTROU AQUI"; 
            if($name == null || $userId == null){
                return false;
            }

            return $this->projectRepository->addProject($name, $type, $security, $description, $userId);
        }

    }