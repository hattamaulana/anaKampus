<?php

namespace App\Models\User;

use App\Models\Model;
use App\Models\Session;

class BuyerModel extends Model {
  private $model;

  public static $NAME       = 'name';
  public static $PHOTO      = 'profile_uri';
  public static $GENDER     = 'gender';
  public static $PLACEBIRTH = 'placebirth';
  public static $DATEBIRTH  = 'datebirth';

  public function __construct() {
    $this->model        = parent::getInstance();
    $this->model->table = 'authentications';
  }
}
