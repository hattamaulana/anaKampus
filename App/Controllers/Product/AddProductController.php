<?php

namespace App\Controllers\Product;

use App\Models\Session;
use App\Controllers\Controller;

class AddProductController extends Controller {
  public function view() {
    parent::show('product/add-product');
  }

  public function add($req) {
    print_r($req->getBody());
    var_dump($_POST['photo']);
    var_dump($_POST['size']);
    die();
  }
}