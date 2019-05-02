<?php

namespace App\Controllers\Auth;

use App\Models\User\UserModel;
use App\Controllers\Controller;

class SignUpController extends Controller {
  public function view() {
    parent::show('auth/signUp');
  }

  public function signUp($req) {
    $user  = new UserModel();
    $data = $req->getBody();
    $data = [
      UserModel::$uid => self::createNewUID($DATA[UserModel::$uid]),
      UserModel::$name => $data[UserModel::$name],
      UserModel::$email => $data[UserModel::$email],
      UserModel::$password => $data[UserModel::$password]
    ];

    $response = new UserModel();
    $response = $user->signUp($data);
    if ($response['message'] === 'success'){
      header("Location: /");
    } else {
      header("Location: /login");
    }
  }

  private static function createNewUID($param) {
    $param = ($param === 'SELLER') ? 'SELLER' : 'BUYER';
    return strtoupper(substr($param, 0, 1)). date('y'). date('W'). date('d'). date('H'). date('i');
  }
}
