<?php

namespace App\Controllers\Product;

use App\Models\Session;
use App\Controllers\Controller;
use App\Models\User\AuthModel as Auth;
use App\Models\Product\SizeModel as Size;
use App\Models\Product\StockModel as Stock;
use App\Models\Product\ProductModel as Product;

class ProductController extends Controller {
  public static function view() {
    $sesi = new Session();
    if(! $sesi->isExists(Auth::$uid))
      header("Location: /login");
      
    $product = new Product();
    $params  = $product->show();

    parent::show('product/edit-products', $params);
  }

  public static function updateView($req) {
    $sesi = new Session();
    if(! $sesi->isExists(Auth::$uid))
      header("Location: /login");
      
    $product = new Product();
    $pid     = parent::getInput($req, [Product::$PID])[Product::$PID];
    $params  = $product->find('*', [Product::$PID => $pid]);

    parent::show('product/update-product', $params[0]);
  }

  public static function update($req) {
    $product = new Product();
    $sesi = new Session();
    if(! $sesi->isExists(Auth::$uid))
      header("Location: /login");

    $data_product = [ Product::$NAME , Product::$CATEGORY , Product::$PRICE , Product::$DESCRIPTION ];
    $data_product = parent::getInput($req, $data_product);
    $pid          = parent::getInput($req, [Product::$PID])[Product::$PID];
    $photo_uri    = "storage/product/$pid-";
    $photo        = parent::getInputManually($_FILES, 'photo');

    if(! $photo['error'] == 4) {
      if($photo['type'] == 'image/jpeg' || $photo['type'] == 'image/jpg' || $photo['type'] == 'image/png') {
        $photo_uri = $photo_uri. basename($data_product[Product::$NAME]);
        if(move_uploaded_file($photo['tmp_name'], __DIR__."/../../../".$photo_uri))
          $photo = true;
      }
    }
    
    if($photo === True)
      $data_product[Product::$PHOTO] = $photo_uri;
    
    if($product->saveUpdate($data_product, $pid))
      header('Location: /edit-product');
    else
      header('Location: /update-product');
  }

  public function remove($req) {
    $sesi = new Session();
    if(! $sesi->isExists(Auth::$uid))
      header("Location: /login");

    $product = new Product();
    $size    = new Size();
    $stock   = new Stock();
    $pid     = parent::getInput($req, [Product::$PID])[Product::$PID];

    $result = $size->find(Size::$SID, [Product::$PID => $pid]);
    foreach ($result as $key => $value) {
      $stock->remove($value[Stock::$PID]);
    }

    $size->remove($pid);
    $product->remove($pid);
    
    header('Location: /delete-product');
  }
}
