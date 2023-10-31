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
            if($name == '' || $userId == null || $type == '' || $security == '' ){
                return false;
            }

            return $this->projectRepository->addProject($name, $type, $security, $description, $userId);
        }

        public function editProject($id, $name, $type, $description){
            return $this->projectRepository->updateProject($id, $name, $type, $description);
        }

        public function getProjectsByUserIdAndType($id, $type){
            return $this->projectRepository->getProjectsByUserIdAndType($id,$type);
        }
    }