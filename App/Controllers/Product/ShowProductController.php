<?php

namespace App\Controllers\Product;

use App\Models\Session;
use App\Controllers\Controller;
use App\Models\Product\ProductModel as Product;

class ShowProductController extends Controller {
  public function viewDetail($req) {
    $product = new Product();
    $pid     = parent::getInputManually($_GET, 'p');
    $params  = $product->find('*', [Product::$PID => $pid])[0];
    
    parent::show('product/single-product', $params);
  }

  public function viewCategory() {
    $product = new Product();
    $params  = $product->showWithLimit(10);
    parent::show('product/show-category-product', $params);
  }
}