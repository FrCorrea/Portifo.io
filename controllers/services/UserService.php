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
    }