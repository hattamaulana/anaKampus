<?php

namespace App\Models\User;

use App\Models\Model;
use App\Models\Session;

class AddressModel extends Model {
  private $model;

  public static $TABLE    = 'addresses';
  public static $AID      = 'aid';
  public static $STREET   = 'street';
  public static $ZIPCODE  = 'zipcode';
  public static $CITY     = 'city';
  public static $PROVINCE = 'province';
  public static $ADDRESS  = 'address';

  public function __construct() {
    $this->model        = parent::getInstance();
    $this->model->table = self::$TABLE;
  }

  public function print($aid) {
    $where_clause = self::$AID. "='$aid'";
    $result = $this->model->get('', $where_clause)->fetch_assoc();

    return $result;
  }

  public function edit($datas = []) {
    $where_clause = self::$AID. "='". $datas[self::$AID]. "'";
    unset($datas[self::$AID]);
    
    return $this->model->update($datas, $where_clause);
  }

  public function add($data = []) {
    return $this->model->insert($data);
  }

  public function isUidExist($data) {
    $where_clause = self::$AID. "='$data'";

    $res = $this->model->get('', $where_clause);
    if ($res->num_rows > 0)
      return false;
    else 
      return true;
  }
}