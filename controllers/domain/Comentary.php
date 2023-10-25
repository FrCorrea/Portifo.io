<?php
    class Comentary {
        private $id;
        private $comentary;
        private $user_id;
        private $project_id;

        public function __construct($id, $comentary, $user_id, $project_id) {
            $this->id = $id;
            $this->comentary = $comentary;
            $this->user_id = $user_id;
            $this->project_id = $project_id;
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            if ($id > 0) {
                $this->id = $id;
            }
        }

        public function getComentary() {
            return $this->comentary;
        }

        public function setComentary($comentary) {
            if (strlen($comentary) > 0) {
                $this->comentary = $comentary;
            }
        }

        public function getUser_id() {
            return $this->user_id;
        }

        public function setUser_id($user_id) {
            if ($user_id > 0) {
                $this->user_id = $user_id;
            }
        }

        public function getProject_id() {
            return $this->project_id;
        }

        public function setProject_id($project_id) {
            if ($project_id > 0) {
                $this->project_id = $project_id;
            }
        }

        public function toArray() {
            return [
                'id' => $this->id,
                'comentary' => $this->comentary,
                'user_id' => $this->user_id,
                'project_id' => $this->project_id
            ];
        }

        public function toJson() {
            return json_encode($this->toArray());
        }

    }
?>

