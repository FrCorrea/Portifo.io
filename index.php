<?php
require("vendor/autoload.php");

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/Portifo.io', 'LoginController@login');
Router::get('/Portifo.io/home-page', 'ProjectsController@showProjects');
Router::get('/Portifo.io/add-project', 'ProjectsController@addProjects');

Router::start();
