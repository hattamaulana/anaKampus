<?php

namespace App\Models\User;

use App\Models\Model;
use App\Models\Session;
use App\Models\User\AuthModel;

class SellerModel extends Model {
  private $model;

  public static $TABLE       = 'seller';
  public static $UID         = 'uid';
  public static $NAME        = 'name';
  public static $EMAIL       = 'email';
  public static $LOGO        = 'logo_uri';
  public static $PHONENUMBER = 'phonenumber';
  public static $DESCRIPTION = 'description';
  public static $RATING      = 'rating';

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
