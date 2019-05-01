<?php

use App\Router\Router;
use App\Router\Request;

$route = new Router(new Request());

$route->get('/', 'View\HomeView@show');
$route->get('/login', 'View\SignInController@show');
$route->get('/register', 'View\SignUpController@show');
$route->post('/register', 'Auth\AuthController@signUp');
