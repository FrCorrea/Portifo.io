<?php
    require_once('../repositories/Repository.php');

    class Service {
        private Repository $repository = new Repository();

        public function login($email, $senha){
            return $this->repository->getUserForLogin($email, $senha);
        }

        public function register($nome, $email, $senha){
            return $this->repository->setUser(new User(0, $nome, $email, $senha));
        }

        public function setProject(Project $project, $userId){
            return $this->repository->setProject($project, $userId);
        }

        public function getProjects($userId){
            return $this->repository->findByProjects($userId);
        }
    }
?>
