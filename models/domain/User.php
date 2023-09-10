<?php

require_once('../domain/Project.php');

class User {
    private $id;
    private $name;
    private $email;
    private $password;
    private Project $projects = [];
    private $githubAccont = null;
    private $linkedinAccount = null;

    public function __construct($id, $name, $email, $password, $projects = [], $githubAccont = null, $linkedinAccount = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->projects = $projects;
        $this->githubAccont = $githubAccont;
        $this->linkedinAccount = $linkedinAccount;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        return $this->id = $id;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        return $this->name = $name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        return $this->email = $email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        return $this->password = $password;
    }
    public function getProjects(){
        return $this->projects;
    }
    public function setProjects($projects){
        return $this->projects = $projects;
    }
    public function getGithubAccont(){
        return $this->githubAccont;
    }
    public function setGithubAccont($githubAccont){
        return $this->githubAccont = $githubAccont;
    }
    public function getLinkedinAccount(){
        return $this->linkedinAccount;
    }
    public function setLinkedinAccount($linkedinAccount){
        return $this->linkedinAccount = $linkedinAccount;
    }
}
?>