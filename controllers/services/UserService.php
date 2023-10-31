<?php
    namespace services;

    require('models/UserRepository.php');

    class UserService {

        private $userRepository;

        public function __construct(){
            $this->userRepository = new \models\UserRepository();
        }

        public function login($email, $senha){
            if($email == null || $senha == null){
                return false;
            }
            if(strlen($senha) < 6){
                return false;
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                return false;
            }
            return $this->userRepository->login($email, $senha);
        }

        public function register($name, $email, $password, $linkedln, $github){
            if($name == null || $email == null || $password == null){
                return false;
            }
            if(strlen($password) < 6){
                return false;
            }
            if(strlen($name) < 3){
                return false;
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                return false;
            }
            if($this->userExists($email)){
                return false;
            }
            return $this->userRepository->register($name, $email, $password, $linkedln, $github);
        }

        public function userExists($email){
            return $this->userRepository->emailExists($email);
        }

        public function getUserById($id){
            return $this->userRepository->getUserById($id);
        }
    }