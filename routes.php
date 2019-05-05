<?php

use App\Router\Router;
use App\Router\Request;

$route = new Router(new Request());

$route->get('/404', 'ErrorView@view404');

$route->get('/', 'HomeView@view');

# Authentication Route
$route->get('/login', 'Auth\SignInController@view');
$route->post('/login', 'Auth\SignInController@signIn');
$route->get('/register', 'Auth\SignUpController@view');
$route->post('/register', 'Auth\SignUpController@signUp');
$route->get('/logout', 'Auth\SignInController@logout');
# ===

# Profile Route
$route->get('/profile', 'User\ProfileController@view');
$route->get('/profile-edit', 'User\ProfileController@editView');
$route->post('/profile-edit', 'User\ProfileController@edit');
# ===

$route->get('/product-stock', 'User\ProfileController@edit');

# === Product
# ====== Add
$route->get('/product-add', 'Product\AddProductController@view');
$route->post('/product-add', 'Product\AddProductController@add');
# ====== End Add

# ====== Search
$route->get('/product', 'Product\SearchProductController@searchView');
# ====== End Search

# ====== Update
$route->post('/product-update', 'User\ProfileController@edit');
# ====== End Update

# ====== Delete
$route->post('/delete-product', 'Product\ProductController@remove');
# ====== End Delete
# ===
