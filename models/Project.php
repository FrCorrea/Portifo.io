<?php

class Project {
    private $id;
    private $name;
    private $type;
    private $technologies = [];
    private $description = [];
    private $users;
    private $githubLink = '';

    public function __construct($id, $name, $description, $users = [], $technologies = [], $type ,$githubLink = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->users = $users;
        $this->githubLink = $githubLink;
        $this->technologies = $technologies;
        $this->type = $type;
    }
}
?>