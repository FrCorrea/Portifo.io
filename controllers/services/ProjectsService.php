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
     
    }