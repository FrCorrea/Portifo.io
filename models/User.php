<?php

class User {
    private $id;
    private $name;
    private $cpf;
    private $email;
    private $password;
    private $projects = [];
    private $githubAccont;
    private $linkedinAccount;

    public function __construct($id, $name, $email, $cpf, $password, $projects = [], $githubAccont, $linkedinAccount)
    {
        $this->id = $id;
        $this->name = $name;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->password = $password;
        $this->projects = $projects;
        $this->githubAccont = $githubAccont;
        $this->linkedinAccount = $linkedinAccount;
    }

}
?>