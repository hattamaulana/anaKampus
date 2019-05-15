<?php

namespace App\Controllers\Transaction;

use App\Models\Session;
use App\Controllers\Controller;
use App\Models\User\AuthModel as Auth;
use App\Models\Transaction\TransactionModel as Transaction;
use App\Models\Transaction\DetailTransactionModel as DetailTransaction;

class HistoryController extends Controller {
  public function view() {
    $session = new Session();
    if(! $session->isExists(Transaction::$UID))
      header('Location: /login');

    $uid = $session->get([Auth::$uid]);
    if(self::isSeller($uid)) {
      $detail_transaction = new DetailTransaction();
      $param_table = "transactions.tid, transactions.created_at";
      $param_inner  = "INNER JOIN transactions ON detail_transactions.tid = transactions.tid ";
      $param_inner .= "INNER JOIN product ON detail_transactions.pid = product.pid";
      $param_where  = 'product.'. Auth::$uid."='". $uid ."'";
      $param_group_by = "transactions.tid";
      $param_order_by = "transactions.created_at";
      $param_asc_desc = "DESC";
      $data = $detail_transaction->multipleJoin(
        $param_table, $param_inner, $param_where, $param_group_by, $param_order_by, $param_asc_desc
      );

      parent::show('product/history-seller', $data);
    } else {
      $transaction = new Transaction();
      $params = $transaction->show($session->get([Transaction::$UID]));
      parent::show('product/history', $params);
    }
  }

  private static function isSeller($uid) {
    return $uid{0} === 'S';
  }
}
