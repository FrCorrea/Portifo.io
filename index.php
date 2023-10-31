<?php
require("vendor/autoload.php");

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get ('/', '\controllers\UserController@index');

Router::get('/login', '\controllers\UserController@login');
Router::post('/auth', '\controllers\UserController@auth');

Router::get('/logout', '\controllers\UserController@logout');

Router::get('/register', '\controllers\UserController@register');
Router::post('/registerUser', '\controllers\UserController@registerUser');

Router::get('/public-projects', 'ProjectsController@publicProjects');
Router::post('/search', 'ProjectsController@search');

Router::get('/user-projects', 'ProjectsController@userProjects');
Router::get('/home', 'ProjectsController@showProjects');

Router::post('/get-project-type/{type}', 'ProjectsController@getProjectsByUserIdAndType');

Router::get('/add-project', 'ProjectsController@addProjects');
Router::post('/add-new-project/{user}', 'ProjectsController@addNewProject');

Router::get('/edit-project', 'ProjectsController@editProjects');
Router::post('/edit-selected-project/{projectId}', 'ProjectsController@editSelectedProject');

Router::get('/delete-project/{projectId}', 'ProjectsController@deleteProject');

Router::start();
