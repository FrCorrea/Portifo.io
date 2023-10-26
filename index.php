<?php
require("vendor/autoload.php");

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get ('/', '\controllers\UserController@init');
// Router::get('/login', '\controllers\UserController@auth');
Router::get('/login', '\controllers\UserController@login');

Router::get('/register', '\controllers\UserController@register');
Router::get('/home', 'ProjectsController@showProjects');
Router::get('/add-project', 'ProjectsController@addProjects');
Router::get('/edit-project', 'ProjectsController@editProjects');
Router::get('/public-projects', 'ProjectsController@getPublicProjects');
Router::start();
