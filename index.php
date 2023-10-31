<?php
require("vendor/autoload.php");

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get ('/', '\controllers\UserController@index');

Router::get('/login', '\controllers\UserController@login');
Router::post('/auth', '\controllers\UserController@auth');

Router::get('/register', '\controllers\UserController@register');
Router::post('/registerUser', '\controllers\UserController@registerUser');

Router::get('/public-projects', 'ProjectsController@publicProjects');
Router::post('/search', 'ProjectsController@search');

Router::get('/home', 'ProjectsController@showProjects');

Router::get('/add-project', 'ProjectsController@addProjects');
Router::post('/add-new-project/{user}', 'ProjectsController@addNewProject');

Router::get('/edit-project', 'ProjectsController@editProjects');

Router::start();
