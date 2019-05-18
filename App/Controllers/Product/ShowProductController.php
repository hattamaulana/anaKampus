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
    $page = parent::getInputManually($_GET, 'p');
    $limit = ($page == null) ? "0, 12" : (($page - 1) * 12). ", ". ($page * 12);
    $product = new Product();
    $params['data']  = $product->showWithLimit($limit);
    $params['paginate'] = $product->paginate();
    $params['position'] = ($page == null) ? 1 : $page;

    parent::show('product/show-category-product', $params);
  }

  public static function filterCategory() {
    $page = parent::getInputManually($_GET, 'p');
    $limit = ($page == null) ? "0, 12" : (($page - 1) * 12). ", ". ($page * 12);
    $filter = parent::getInputManually($_GET, 'c');
    $product = new Product();

    $params['data']  = $product->showWithLimit($limit, Product::$CATEGORY."='$filter'");
    $params['paginate'] = $product->paginate(Product::$CATEGORY."='$filter'");
    $params['position'] = ($page == null) ? 1 : $page;

    parent::show('product/show-category-product', $params);
  }

  public static function filterSet($req) {
    $page = parent::getInputManually($_GET, 'p');
    $limit = parent::getInputManually($_GET, 'limit');
    $limit = ($page == null) ? "0, $limit" : (($page - 1) * $limit). ", ". ($page * $limit);
    $filter = parent::getInputManually($_GET, 'sort');
    $category = parent::getInputManually($_GET, 'category');
    $product = new Product();
    
    $params['data'] = $product->showWithLimit($limit, Product::$CATEGORY. "='$category'", Product::$PRICE. " $filter");
    $params['paginate'] = $product->paginate(Product::$CATEGORY. "='$category'", Product::$PRICE. " $filter");
    $params['position'] = ($page == null) ? 1 : $page;
    
    parent::show('product/show-category-product', $params);
  }
}