<?php 

namespace App\Models\Transaction;

use App\Models\Model;

class TransactionModel extends Model {
  public static $TID = 'tid';
  public static $UID = 'uid';
  public static $PAY = 'total_pembayaran';
  public static $CREATED_AT = 'created_at';
  public static $UPDATED_AT = 'updated_at';
  public $TABLE = 'transactions';

  private $model;
  private $last_id;
  public function __construct() {
    $this->model = parent::getInstance();
    $this->model->table = $this->TABLE;
  }

  public function create($args = []) {
    return $this->model->insert($args);
  }

  public function getLastId($arg) {
    return $this->model->insert_id($arg);
  }
}