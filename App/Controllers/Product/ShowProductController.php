<?php

namespace App\Controllers\Product;

use App\Models\Session;
use App\Controllers\Controller;
use App\Models\Product\ProductModel as Product;

class ShowProductController extends Controller {
  public static function viewDetail($req) {
    $product = new Product();
    $pid     = parent::getInputManually($_GET, 'p');
    $params  = $product->find('*', [Product::$PID => $pid])[0];
    
    parent::show('product/single-product', $params);
  }

  public static function viewCategory() {
    $product = new Product();
    $params  = $product->showWithLimit(100);

    parent::show('product/show-category-product', $params);
  }

  public static function filterCategory() {
    $filter = parent::getInputManually($_GET, 'c');
    $product = new Product();

    $params = $product->showWithLimit(12, Product::$CATEGORY."='$filter'");
    parent::show('product/show-category-product', $params);
  }

  public static function filterSet($req) {
    $category = parent::getInputManually($_GET, 'category');
    $filter = parent::getInputManually($_GET, 'sort');
    $limit = parent::getInputManually($_GET, 'limit');
    $product = new Product();

    $params = $product->showWithLimit($limit, Product::$CATEGORY. "='$category'", Product::$PRICE. " $filter");
    parent::show('product/show-category-product', $params);
  }
}