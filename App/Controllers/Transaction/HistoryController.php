<?php

namespace App\Controllers\Transaction;

use App\Models\Session;
use App\Controllers\Controller;
use App\Models\Transaction\TransactionModel as Transaction;

class HistoryController extends Controller {
  public function view() {
    $transaction = new Transaction();
    $session = new Session();
    if(! $session->isExists(Transaction::$UID))
      header('Location: /login');
    
    $params = $transaction->show($session->get([Transaction::$UID]));
    parent::show('product/history', $params);
  }
}
