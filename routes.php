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

// product Route
  // Show UI
    $route->get('/product/stock', 'User\ProfileController@edit');
    $route->get('/product/add', 'product\AddProductController@view');
    $route->get('/product/search', 'product\SearchProductController@searchView');
    $route->get('/product/edit', 'product\ProductController@view');
    $route->get('/product/category', 'product\ShowProductController@viewCategory');
    $route->get('/product/category/filter', 'product\ShowProductController@filterCategory');
    $route->get('/filter-set', 'product\ShowProductController@filterSet');
    $route->get('/product/detail', 'product\ShowProductController@viewDetail');
    $route->get('/product/delete', 'product\DeleteProductController@view');
  // Process
    $route->post('/product/add', 'product\AddProductController@add');
    $route->post('/update-product', 'product\ProductController@updateView');
    $route->post('/product-update', 'product\ProductController@update');
    $route->post('/search-product', 'product\SearchProductController@searchView');
    $route->post('/delete-product', 'product\ProductController@remove');
// ~product

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