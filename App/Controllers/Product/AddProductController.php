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
  public static function view() {
    parent::show('product/add-product');
  }

  public static function add($req) {
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
    $photo      = parent::getInputManually($_FILES, 'photo');
    $photo_uri  = "Storage/Product/$pid-". basename($data_product[Product::$NAME]);

    if(! $photo['error'] == 4)
      if($photo['type'] == 'image/jpeg' || $photo['type'] == 'image/jpg' || $photo['type'] == 'image/png')
        if(move_uploaded_file($photo['tmp_name'], __DIR__."/../../../".$photo_uri))
          $photo = true;

    if($photo === True)
      $data_product[Product::$PHOTO] = $photo_uri;
    $data_product[Product::$UID] = $session->get([Product::$UID]);
    $data_product[Product::$PID] = self::createNewPID($data_product[Product::$CATEGORY], $data_product[Product::$UID]);

    unset($data_product[Stock::$STOCK]);
    if( $product->add($data_product) && $size->add($data_size, $data_product[Product::$PID]) )
      header('Location: /search-product');
    else
      header('Location: /product-add');
  }

  private static function createNewPID($cat, $uid) {
    return strtoupper(substr($cat, 0, 1)). 
           substr($uid, 1, 3). 
           substr($uid, 8, 11). 
           date('B'). 
           substr($cat, strlen($cat)-1, strlen($cat));
  }
}