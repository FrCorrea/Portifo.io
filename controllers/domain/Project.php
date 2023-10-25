<?php

class Project {
    private $id;
    private $name;
    private $type;
    private $security;
    private $description;
    private $user_id;

    public function __construct($id, $name, $type, $security, $description, $user_id) {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->security = $security;
        $this->description = $description;
        $this->user_id = $user_id;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        if ($id > 0) {
            $this->id = $id;
        }
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        if (strlen($name) > 0) {
            $this->name = $name;
        }
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        if (strlen($type) > 0) {
            $this->type = $type;
        }
    }

    public function getSecurity() {
        return $this->security;
    }

    public function setSecurity($security) {
        if (strlen($security) > 0) {
            $this->security = $security;
        }
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        if (strlen($description) > 0) {
            $this->description = $description;
        }
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function setUserId($user_id) {
        if ($user_id > 0) {
            $this->user_id = $user_id;
        }
    }

    public function toarray() {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'security' => $this->security,
            'description' => $this->description,
            'user_id' => $this->user_id
        );
    }

    public function toJson() {
        return json_encode($this->toarray());
    }   
}
?>