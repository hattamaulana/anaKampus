<?php

namespace App\Models\User;

use App\Models\Model;

class AuthModel extends Model {
  private $model;

  public static $uid = 'uid';
  public static $name = 'name';
  public static $email = 'email';
  public static $password = 'password';

  public function __construct() {
    $this->model        = parent::getInstance();
    $this->model->table = 'authentications';
  }

  public function signUp($param = []) {
    $return      = [];
    $whereClause = self::$email. " = '" .$param[self::$email]. "'";

    if (! $this->getEmail($whereClause)){
      $param[self::$password] = $this->model->hashPassword($param[self::$password]);

      if ($this->model->insert($param))
        $return['message'] = 'success';
      else
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

  private function getEmail($param) {
    $result = $this->model->get('', $param);

    if ($result->num_rows > 0)
      return true;

    return false;
  }
}
