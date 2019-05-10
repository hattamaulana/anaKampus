<?php

namespace App\Controllers\Transaction;

use App\Models\Session;
use App\Controllers\Controller;
use App\Models\Transaction\TransactionModel as Transaction;
use App\Models\Transaction\DetailTransactionModel as DetailTransaction;

class ConfirmationController extends Controller {
  public function view() {
    parent::show('product/confirmation-checkout');
  }
}