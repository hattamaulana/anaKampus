<?php

use App\Router\Router;
use App\Router\Request;

$route = new Router(new Request());
$route->get('/404', 'ErrorView@view404');
$route->get('/', 'HomeView@view');
$route->get('/contact', 'HomeView@contact');

# === Authentication Route
# ====== Login
$route->get('/login', 'Auth\SignInController@view');
$route->post('/login', 'Auth\SignInController@signIn');
# ====== Register
$route->get('/register', 'Auth\SignUpController@view');
$route->post('/register', 'Auth\SignUpController@signUp');
# ====== Logout
$route->get('/logout', 'Auth\SignInController@logout');
# === Profile Route
$route->get('/profile', 'User\ProfileController@view');
$route->get('/profile-edit', 'User\ProfileController@editView');
$route->post('/profile-edit', 'User\ProfileController@edit');

$route->get('/product-stock', 'User\ProfileController@edit');
# === Product
# ====== Add
$route->get('/product-add', 'Product\AddProductController@view');
$route->post('/product-add', 'Product\AddProductController@add');
# ====== Search
$route->get('/search-product', 'Product\SearchProductController@searchView');
$route->post('/search-product', 'Product\SearchProductController@searchView');
# ====== Update
$route->get('/edit-product', 'Product\ProductController@view');
$route->post('/update-product', 'Product\ProductController@updateView');
$route->post('/product-update', 'Product\ProductController@update');
# ====== Delete
$route->get('/delete-product', 'Product\DeleteProductController@view');
$route->post('/delete-product', 'Product\ProductController@remove');
# ======
# === 
$route->get('/show-category', 'Product\ShowProductController@viewCategory');
$route->get('/detail-product', 'Product\ShowProductController@viewDetail');
# =====
$route->get('/cart', 'Cart\CartController@view');
$route->get('/add-cart', 'Cart\CartController@add');
$route->get('/remove-cart', 'Cart\CartController@delete');
# ======
$route->post('/pay', 'Transaction\PayController@add');
$route->get('/pay-confirmation', 'Transaction\ConfirmationController@view');