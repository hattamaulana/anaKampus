<?php

namespace App\Models\User;

use App\Models\Model;
use App\Models\Session;

class BuyerModel extends Model {
  public static $TABLE      = 'buyer';
  public static $UID        = 'uid';
  public static $PHOTO      = 'profile_uri';
  public static $NAME       = 'name';
  public static $GENDER     = 'gender';
  public static $PLACEBIRTH = 'place_birth';
  public static $DATEBIRTH  = 'date_birth';
  public static $PHONENUMBER = 'phonenumber';

  private $model;
  public function __construct() {
    $this->model        = parent::getInstance();
    $this->model->table = self::$TABLE;
  }

  public function print($uid) {
    $where_clause = self::$UID. "='$uid'";
    $result = $this->model->get('', $where_clause)->fetch_assoc();

    return $result;
  }

  public function edit($datas = [], $change_table = '') {
    $where_clause = self::$UID. "='". $datas[self::$UID]. "'";
    unset($datas[self::$UID]);

    if($change_table != '') {
      $this->model->table = $change_table;
    }
    
    $result = $this->model->update($datas, $where_clause);
    $this->model->table = self::$TABLE;
    
    return $result;
  }
}
