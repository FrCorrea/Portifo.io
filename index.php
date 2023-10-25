<?php
require("vendor/autoload.php");

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'LoginController@login');
Router::get('/home-page', 'ProjectsController@showProjects');
Router::get('/add-project', 'ProjectsController@addProjects');

Router::start();
