<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Product\ProductModel as Product;

class HomeView extends Controller {
  public static function view() {
    $product = new Product();
    $params  = $product->showWithLimit(10);
    
    parent::show('index', $params);
  }

  public static function contact() {
    parent::show('contact');
  }
}
