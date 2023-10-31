<?php

namespace domain;

class User {
    private $id;
    private $name;
    private $email;
    private $password;
    private $linkedin;
    private $github;

    public function __construct($id, $name, $email, $password, $linkedin, $github) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->$password = $password;
        $this->linkedin = $linkedin;
        $this->github = $github;
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

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        if (strlen($email) > 0) {
            $this->email = $email;
        }
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        if (strlen($password) > 0) {
            $this->password = $password;
        }
    }

    public function getLinkedin() {
        return $this->linkedin;
    }

    public function setLinkedin($linkedin) {
        if (strlen($linkedin) > 0) {
            $this->linkedin = $linkedin;
        }
    }

    public function getGithub() {
        return $this->github;
    }

    public function setGithub($github) {
        if (strlen($github) > 0) {
            $this->github = $github;
        }
    }

    public function toArray() {
        return array(
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->email,
            "password" => $this->password,
            "linkedin" => $this->linkedin,
            "github" => $this->github
        );
    }

    public function toJson() {
        return json_encode($this->toArray());
    }
}



?>