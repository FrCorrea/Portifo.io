<?php

class Project {
    private $id;
    private $name;
    private $type;
    private $description = [];

    public function __construct($id, $name, $description, $type)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->type = $type;
    }
}
?>