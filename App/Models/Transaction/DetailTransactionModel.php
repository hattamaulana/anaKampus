<?php 

namespace App\Models\Transaction;

use App\Models\Model;

class DetailTransactionModel extends Model {
  public static $ID = 'id';
  public static $TID = 'tid';
  public static $PID = 'pid';
  public static $COUNT = 'banyak_pembelian';
  public static $PAY = 'total_pembelian';
  public $TABLE = 'detail_transactions';

  private $model;
  public function __construct() {
    $this->model = parent::getInstance();
    $this->model->table = $this->TABLE;
  }

  public function add($args = []) {
    return $this->model->insert($args);
  }
}