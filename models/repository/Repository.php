<?php
    require_once('../domain/User.php');
    require_once('../domain/Project.php');

    class Repository {
        private User $users = [
            new User(1, 'Francisco Correa', 'francisco@gmail.com', '12345',
              [
                new Project(1, 'Projeto Site 1', 'Descrição do Site', 'websites'),
                new Project(2, 'Projeto App 1', 'Descrição do App', 'apps'),
                new Project(3, 'Projeto Design 1', 'Descrição do Design', 'design'),
                new Project(4, 'Projeto Site 2', 'Descrição do Site', 'websites'),
                new Project(5, 'Projeto App 2', 'Descrição do App', 'apps'),
                new Project(6, 'Projeto Design 2', 'Descrição do Design', 'design'),
                new Project(7, 'Projeto Site 3', 'Descrição do Site', 'websites'),
                new Project(8, 'Projeto App 3', 'Descrição do App', 'apps'),
                new Project(9, 'Projeto Design 3', 'Descrição do Design', 'design')
              ],
             'github.com/FrCorrea','linkedln.com/FrCorrea'),

            new User(1, 'Amanda Santos', 'amanda@gmail.com', '12345',
              [
                new Project(10, 'Projeto Site 1', 'Descrição do Site', 'websites'),
                new Project(11, 'Projeto App 1', 'Descrição do App', 'apps'),
                new Project(12, 'Projeto Design 1', 'Descrição do Design', 'design'),
                new Project(13, 'Projeto Site 2', 'Descrição do Site', 'websites'),
                new Project(14, 'Projeto App 2', 'Descrição do App', 'apps'),
                new Project(15, 'Projeto Design 2', 'Descrição do Design', 'design'),
                new Project(16, 'Projeto Site 3', 'Descrição do Site', 'websites'),
                new Project(17, 'Projeto App 3', 'Descrição do App', 'apps'),
                new Project(18, 'Projeto Design 3', 'Descrição do Design', 'design')
               ],
             'github.com/Skye','linkedln.com/Amanda'),
        ];

        public function getUserForLogin($email, $senha){
            foreach($this->users as $us){
                if($us->getEmail() == $email && $us->getPassword() == $senha){
                    return $us;
                }
            }
            return false;
        }
        public function getUsers(){
            return $this->users;
        }

        public function getUser(User $user){
            foreach($this->users as $us){
                if($us->getEmail() == $user->getEmail()){
                    return $us;
                }
            }
            return false;
        }
        public function setUser(User $user){
            return !$this->getUser($user) ? array_push($this->users[], $user) : false;
        }

        public function setProject(Project $project, $userId){
            foreach($this->users as $us){
                if($us->getId() == $userId){
                    return array_push($us->getProjects(), $project);
                }
            }
            return false;
        }

        public function findByProjects($userId){
            foreach($this->users as $us){
                if($us->getId() == $userId){
                    return $us->getProjects();
                }
            }
            return false;
        }
    }
?>