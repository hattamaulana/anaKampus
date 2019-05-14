<?php

namespace App\Models\Product;

use App\Models\Model;

class ProductModel extends Model {
  public static $TABLE       = 'product';
  public static $UID         = 'uid';
  public static $PID         = 'pid';
  public static $PHOTO       = 'photo';
  public static $NAME        = 'name';
  public static $CATEGORY    = 'category';
  public static $PRICE       = 'price';
  public static $DESCRIPTION = 'description';
  public static $RATING      = 'rating';
  public static $CREATED_AT  = 'created_at';
  public static $UPDATED_AT  = 'updated_at';

  private $model;
  public function __construct() {
    $this->model        = parent::getInstance();
    $this->model->table = self::$TABLE;
  }

  public function saveUpdate($data = [], $pid) {
    return $this->model->update($data, self::$PID. "='$pid'");
  }

  public function add($data) {
    return $this->model->insert($data);
  }

  public function showWithLimit($limit) {
    $return = [];
    $result = $this->model->get('*', '', '', $limit);
    while($data = $result->fetch_assoc()) 
      array_push($return, $data);
    
    return $return;
  }

  public function show() {
    $clause = self::$UID. "='". $_SESSION[self::$UID] ."'";
    $result = $this->model->get('*', $clause);
    $return = [];
    while($data = $result->fetch_assoc()) 
      array_push($return, $data);
    
    return $return;
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
