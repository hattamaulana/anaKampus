<?php

namespace App\Controllers\Product;

use App\Models\Session;
use App\Controllers\Controller;
use App\Models\User\AuthModel as Auth;
use App\Models\Product\ProductModel as Product;

class SearchProductController extends Controller {
  public static function searchView() {
    $sesi = new Session();
    if(! $sesi->isExists(Auth::$uid))
      header("Location: /login");
      
    $product = new Product();
    $params  = $product->show();

    parent::show('product/products', $params);
  }
}
