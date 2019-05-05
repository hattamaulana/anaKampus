<?php

namespace App\Models\Product;

use App\Models\Model;

class StockModel extends Model {
  public static $PID   = 'sid';
  public static $STOCK = 'stock';
  public static $SOLD  = 'sold';

  private $model;
  public function __construct() {
    $this->model        = parent::getInstance();
    $this->model->table = 'stock';
  }

  public function add($data, $sid) {
    $param = [ self::$PID => $sid, self::$STOCK => $data ];
    return $this->model->insert($data);
  }

  public function remove($pid) {
    $where_clause = self::$PID. "='". $pid ."'";

    return $this->model->delete($where_clause);
  }
}