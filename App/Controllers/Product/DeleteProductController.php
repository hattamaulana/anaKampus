<?php

namespace App\Controllers\Product;

use App\Models\Session;
use App\Controllers\Controller;
use App\Models\User\AuthModel as Auth;
use App\Models\Product\SizeModel as Size;
use App\Models\Product\StockModel as Stock;
use App\Models\Product\ProductModel as Product;

class DeleteProductController extends Controller {
  public function view(){
    $sesi = new Session();
    if(! $sesi->isExists(Auth::$uid))
      header("Location: /login");
      
    $product = new Product();
    $params  = $product->show();

    parent::show('product/delete-products', $params);
  }

  public function remove($req) {
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
    
    header('Location: /product');
  }
}
