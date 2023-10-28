<?php
    namespace services;

    require('models/UserRepository.php');

    class UserService {

        private $userRepository;

        public function __construct(){
            $this->userRepository = new \models\UserRepository();
        }

        public function login($email, $senha){
            return $this->userRepository->login($email, $senha);
        }

        public function register($name, $email, $password, $linkedln, $github){
            if($name == null || $email == null || $password == null){
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
    }