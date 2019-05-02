<?php

namespace App\Controllers\Product;

use App\Controllers\Controller;

class SingleProductController extends Controller {
  public function view() {
    parent::show('index');
  }
}
