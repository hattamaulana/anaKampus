<?php

namespace App\Controllers\Transaction;

use App\Models\Session;
use App\Controllers\Controller;
use App\Models\User\AuthModel as Auth;
use App\Models\Transaction\TransactionModel as Transaction;
use App\Models\Transaction\DetailTransactionModel as DetailTransaction;

class PayController extends Controller {
  public static function add($req) {
    $pid = parent::getInputManually($_POST, 'pid');
    $total_bayar = parent::getInputManually($_POST, 'pembayaran');
    $jumlah_pembelian = parent::getInputManually($_POST, 'jumlahpembelian');

    $session = new Session();
    $transaction = new Transaction();
    $detail_transaction = new DetailTransaction();

    $tid = self::getTransactionId();
    $uid = $session->get(['uid']);
    $insert_status = true;
    $data_transaction = [
      Transaction::$TID => $tid,
      Auth::$uid => $uid,
      Transaction::$PAY => $total_bayar 
    ];

    if($transaction->create($data_transaction)) {
      for($i = 0; $i < count($pid); $i++) {
        $param = [
          DetailTransaction::$TID => $tid,
          DetailTransaction::$PID => $pid[$i],
          DetailTransaction::$COUNT => $jumlah_pembelian[$i]
        ];

        if(! $detail_transaction->add($param))
          $insert_status = false;
      }
    } else
        $insert_status = false;

    if($insert_status)
      header('Location: /pay-confirmation?t='. $tid);
  }

  private static function getTransactionId() {
    return date('y'). date('W'). date('d'). date('H'). date('i');
  }
}
