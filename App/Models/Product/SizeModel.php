<?php

namespace App\Models\Product;

use App\Models\Model;

class SizeModel extends Model {
  public static $SID   = 'sid';
  public static $PID   = 'pid';
  public static $SIZE = 'size';

  private $model;
  private $lastId;
  public function __construct() {
    $this->model        = parent::getInstance();
    $this->model->table = 'sizes';
  }

  public function add($data, $pid) {
    foreach($data as $val) {
      $param  = [ self::$PID => $pid, self::$SIZE => $val ];
      $result = $this->model->insert($param);

      if (! $result)
        return false;
    }

    return true;
  }

  public function getLastId() {
    return $this->lastId;
  }

  public function find($row, $clause) {
    $key = array_keys($clause)[0];
    $result = $this->model->get($row, $key."='". $clause[$key] ."'");
    $return = [];
    while($data = $result->fetch_assoc())
      array_push($return, $data);

    return $return;
  }

  public function remove($pid) {
    $where_clause = self::$PID. "='". $pid ."'";

    return $this->model->delete($where_clause);
  }
}
