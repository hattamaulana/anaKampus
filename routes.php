<?php

use App\Router\Router;
use App\Router\Request;

$route = new Router(new Request());

$route->get('/', 'Auth\AuthController@signUp');
