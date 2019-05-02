<?php

use App\Router\Router;
use App\Router\Request;

$route = new Router(new Request());

$route->get('/404', 'ErrorView@view404');

$route->get('/', 'HomeView@view');

$route->get('/login', 'Auth\SignInController@view');
$route->post('/login', 'Auth\SignInController@signIn');

$route->get('/register', 'Auth\SignUpController@view');
$route->post('/register', 'Auth\SignUpController@signUp');
