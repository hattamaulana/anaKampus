<?php

namespace App\Models\User;

use App\Models\Model;

class AuthModel extends Model {
  private $model;

  public static $TABLE = 'authentications';
  public static $uid = 'uid';
  public static $name = 'name';
  public static $email = 'email';
  public static $password = 'password';

  public function __construct() {
    $this->model        = parent::getInstance();
    $this->model->table = self::$TABLE;
  }

  public function print($key, $val) {
    $return      = [];
    $whereClause = $key. " = '" .$val. "'";
    $result      = $this->model->get('', $whereClause);

    while ($user = $result->fetch_assoc())
        $return = $user;
    
    return $return;
  }

  public function signUp($param = [], $table) {
    $return      = [];
    $whereClause = self::$email. " = '" .$param[self::$email]. "'";

    if (! $this->getEmail($whereClause)){
      $param[self::$password] = $this->model->hashPassword($param[self::$password]);

      if($this->model->insert($param)){
        unset($param[AuthModel::$email]);
        unset($param[AuthModel::$password]);

        if($this->model->insert($param, ($table == 'S') ? 'seller' : 'buyer'))
          $return['message'] = 'success';
      } else
        $return['message'] = 'system-error';
    } else 
      $return['message'] = 'email-exists';

    return $return;
  }

  public function signIn($param = []) {
    $return      = [];
    $whereClause = self::$email. " = '" .$param[self::$email]. "'";

    if ($this->getEmail($whereClause)) {
      $result = $this->model->get('', $whereClause);

      while ($user = $result->fetch_assoc())
        if (password_verify($param[AuthModel::$password], $user[self::$password])){
          $return = $user;
          $return['message'] = 'success';
        } else
          $return['message'] = 'Password Salah';
    } else 
        $return['message'] = 'Email Belum Terdaftar'; 
    
    return $return;
  }

  public function changePassword($uid, $password) {
    $where = self::$uid. "='$uid'";
    $data = $this->model->get('', $where)->fetch_assoc();

    if(password_verify($password['old_password'], $data['password'])) {
        $new_password = $this->model->hashPassword($password['new_password']);
        $update = [ self::$password => $new_password ];

        return $this->model->update($update, $where);
    } else 
        return false;
  }

  private function getEmail($param) {
    $result = $this->model->get('', $param);

    if ($result->num_rows > 0)
      return true;

    return false;
  }
}
