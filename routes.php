<?php

use App\Kernel\Router;
use App\Kernel\Request\Request;
$route = new Router(new Request());
/*
|
| Web Routes
|
| Here is where you can register web routes for this application. These
| routes are loaded by the Router within __call function
|
*/

// Error Page Route.
  $route->get('/404', 'ErrorView@view404'); 

// Main Menu in this Web.
  $route->get('/', 'HomeView@view');
  $route->get('/contact', 'HomeView@contact');

// Authentication Route.
  // Show UI
    $route->get('/login', 'Auth\SignInController@view');
    $route->get('/register', 'Auth\SignUpController@view');
    $route->get('/logout', 'Auth\SignInController@logout');
  // Proccess
    $route->post('/login', 'Auth\SignInController@signIn');
    $route->post('/register', 'Auth\SignUpController@signUp');
// ~Auth

// Profile Route
  // Show UI
    $route->get('/profile', 'User\ProfileController@view');
    $route->get('/profile/edit', 'User\ProfileController@editView');
    $route->get('/change-password', 'User\ProfileController@changePassword');
  // Process
    $route->post('/profile/edit', 'User\ProfileController@edit');
    $route->post('/profile/edit-buyer', 'User\ProfileController@editBuyer');
    $route->post('/change-password', 'User\ProfileController@modifyPassword');
// ~Profile

// Product Route
  // Show UI
    $route->get('/product/stock', 'User\ProfileController@edit');
    $route->get('/product/add', 'Product\AddProductController@view');
    $route->get('/product/search', 'Product\SearchProductController@searchView');
    $route->get('/product/edit', 'Product\ProductController@view');
    $route->get('/product/category', 'Product\ShowProductController@viewCategory');
    $route->get('/product/category/filter', 'Product\ShowProductController@filterCategory');
    $route->get('/filter-set', 'Product\ShowProductController@filterSet');
    $route->get('/product/detail', 'Product\ShowProductController@viewDetail');
    $route->get('/product/delete', 'Product\DeleteProductController@view');
  // Process
    $route->post('/product/add', 'Product\AddProductController@add');
    $route->post('/update-product', 'Product\ProductController@updateView');
    $route->post('/product-update', 'Product\ProductController@update');  
    $route->post('/search-product', 'Product\SearchProductController@searchView');
    $route->post('/delete-product', 'Product\ProductController@remove');
// ~Product

// Transaction Route
  // Show UI
    $route->get('/cart', 'Cart\CartController@view');
    $route->get('/add-cart', 'Cart\CartController@add');
    $route->get('/remove-cart', 'Cart\CartController@delete');
    $route->get('/pay-confirmation', 'Transaction\ConfirmationController@view');
    $route->get('/history', 'Transaction\HistoryController@view');
    $route->get('/histories', 'Transaction\HistoryController@detail');
  // Process
    $route->post('/pay', 'Transaction\PayController@add');
// ~Transaction