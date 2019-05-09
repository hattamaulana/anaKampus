<?php

namespace App\Controllers\Transaction;

use App\Controllers\Controller;

class PayController extends Controller {
  public function index($req) {
    die($req->getBody());
  }
}
