<?php
require("vendor/autoload.php");

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/login', 'UserController@login');
Router::get('/register', 'UserController@register');
Router::get('/home', 'ProjectsController@showProjects');
Router::get('/add-project', 'ProjectsController@addProjects');
Router::start();
