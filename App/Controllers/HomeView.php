<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Product\ProductModel as Product;

class HomeView extends Controller {
  public function view() {
    $product = new Product();
    $params  = $product->showWithLimit(10);
    
    parent::show('index', $params);
  }

  public function contact() {
    parent::show('contact');
  }
}
