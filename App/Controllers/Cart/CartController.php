<?php

namespace App\Controllers\Cart;

use App\Models\Session;
use App\Controllers\Controller;
use App\Models\Product\ProductModel as Product;

class CartController extends Controller {
  public function view() {
    $sesi = new Session();
    $product = new Product();
    if(! $sesi->isExists('uid')) {
      header('Location: /login');
      exit();
    }

    $params = [];
    if($sesi->isExists(Product::$PID)) {
      $carts = $sesi->getData(Product::$PID);
      foreach ($carts as $cart)
        array_push($params, $product->find('*', [Product::$PID => $cart])[0]);
    }

    parent::show('product/cart', $params);
  }

  public function add() {
    $sesi = new Session();
    if(! $sesi->isExists('uid')) {
      header('Location: /login');
      exit();
    }

    $cart = [];
    $new_cart = parent::getInputManually($_GET, 'p');
    
    if($sesi->isExists(Product::$PID)) {
      $arry = [ $new_cart ];
      $cart = $sesi->getData(Product::$PID);
      foreach($cart as $val)
        array_push($arry, $val);
      
      $sesi->add([Product::$PID => array_unique($arry)]);
    } else
        $sesi->add([Product::$PID => [$new_cart]]);

    header('Location: /cart');
  }

  public function delete($req) {
    $pid = parent::getInputManually($_GET, 'p');
    $sesi = new Session();
    $param = [];
    $product = new Product();

    foreach ($sesi->getData(Product::$PID) as $cart)
      if($cart != $pid)
        array_push($param, $cart);

    $sesi->add([Product::$PID => array_unique($param)]);
    header('Location: /cart');
  }
}