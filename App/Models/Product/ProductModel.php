<?php

namespace App\Models\Product;

use App\Models\Model;

class ProductModel extends Model {
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
    $this->model->table = 'product';
  }

  public function add($data) {
    return $this->model->insert($data);
  }

  public function show() {
    $result = $this->model->get();
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
