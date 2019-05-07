<?php

namespace App\Controllers\Product;

use \str_count;
use App\Models\Session;
use App\Controllers\Controller;
use App\Models\User\AuthModel as Auth;
use App\Models\Product\SizeModel as Size;
use App\Models\Product\StockModel as Stock;
use App\Models\Product\ProductModel as Product;

class AddProductController extends Controller {
  public function view() {
    parent::show('product/add-product');
  }

  public function add($req) {
    $product = new Product();
    $size    = new Size();
    $stock   = new Stock();
    $session = new Session();
    if(! $session->isExists(Auth::$uid))
      header('Location: /login');

    $data_product = [ Product::$NAME , Product::$CATEGORY , Product::$PRICE , Product::$DESCRIPTION, Stock::$STOCK ];
    $data_product = parent::getInput($req, $data_product);
    $data_size  = parent::getInputManually($_POST, Size::$SIZE);
    $data_stock = $data_product[Stock::$STOCK];
    unset($data_product[Stock::$STOCK]);
    
    $data_product[Product::$UID] = $session->get([Product::$UID]);
    $data_product[Product::$PID] = self::createNewPID($data_product[Product::$CATEGORY], $data_product[Product::$UID]);

    if( $product->add($data_product) && $size->add($data_size, $data_product[Product::$PID]) )
      header('Location: /search-product');
    else
      header('Location: /product-add');
  }

  private static function createNewPID($cat, $uid) {
    return strtoupper(substr($cat, 0, 1)). substr($uid, 1, 3). substr($uid, 8, 11). date('B'). substr($cat, strlen($cat)-1, strlen($cat));
  }
}