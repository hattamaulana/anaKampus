<?php

namespace App\Controllers\Auth;

use App\Models\Session;
use App\Models\User\AuthModel;
use App\Controllers\Controller;

class SignUpController extends Controller {
  public function view() {
    parent::show('auth/signUp');
  }

  public function signUp($req) {
    $sesi = new Session();
    $user = new AuthModel();
    $data = $req->getBody();
    $data = [
      AuthModel::$uid => self::createNewUID(($data)),
      AuthModel::$name => $data[AuthModel::$name],
      AuthModel::$email => $data[AuthModel::$email],
      AuthModel::$password => $data[AuthModel::$password]
    ];

    $response = $user->signUp($data);
    if ($response['message'] === 'success'){
      unset($data[AuthModel::$password]);
      $sesi->add($data);

      header("Location: /profile");
    } else {
      header("Location: /login");
    }
  }

  private static function createNewUID($param) {
    $param = (isset($param[AuthModel::$uid])) ? 'SELLER' : 'BUYER';
    return strtoupper(substr($param, 0, 1)). date('y'). date('W'). date('d'). date('H'). date('i');
  }
}
