<?php

class User {
    private $id;
    private $name;
    private $email;
    private $password;
    private $projects = [];
    private $githubAccont;
    private $linkedinAccount;

    public function __construct($id, $name, $email, $password, $projects = [], $githubAccont, $linkedinAccount)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->projects = $projects;
        $this->githubAccont = $githubAccont;
        $this->linkedinAccount = $linkedinAccount;
    }

}
?>