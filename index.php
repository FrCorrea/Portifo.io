<?php
require("vendor/autoload.php");

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'UserController@login');
Router::post('/login', 'UserController@auth');
// Router::get('/login/{email}', 'UserController@loginUser');
Router::get('/register', 'UserController@register');
Router::get('/home', 'ProjectsController@showProjects');
Router::get('/add-project', 'ProjectsController@addProjects');
Router::start();
