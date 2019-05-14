<?php

namespace App\Controllers\Transaction;

use App\Models\Session;
use App\Controllers\Controller;
use App\Models\User\AddressModel as Address;
use App\Models\Product\ProductModel as Product;
use App\Models\Transaction\TransactionModel as Transaction;
use App\Models\Transaction\DetailTransactionModel as DetailTransaction;

class ConfirmationController extends Controller {
  public function view() {
    $tid = parent::getInputManually($_GET, 't');
    $transaction = new Transaction();
    $detail_transaction = new DetailTransaction();

    $params['order-info'] = $transaction->join(
      Address::$TABLE, Address::$AID, $transaction->TABLE. ".". Transaction::$TID ."='$tid'"
    );
    $params['order-detail'] = $detail_transaction->join(
      Product::$TABLE, Product::$PID, $detail_transaction->TABLE. ".". DetailTransaction::$TID ."='$tid'"
    );
    
    parent::show('product/confirmation-checkout', $params);
  }
}