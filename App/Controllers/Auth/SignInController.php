<?php

namespace App\Controllers\Auth;

use App\Models\Session;
use App\Models\User\AuthModel;
use App\Controllers\Controller;

class SignInController extends Controller {
  public function view() {
    parent::show('auth/signIn');
  }

  public function signIn($req) {
    $sesi = new Session();
    $user = new AuthModel();
    $data = $req->getBody();
    $data = [
      AuthModel::$email => $data[AuthModel::$email],
      AuthModel::$password => $data[AuthModel::$password]
    ];

    $response = $user->signIn($data);
    if ($response['message'] === 'success'){
      unset($response['message']);
      unset($response['password']);
      $sesi->add($response);

      header("Location: /profile");
    } else {
      header("Location: /login");
    }
  }

  public function logout() {
    $sesi = new Session();
    $sesi->destroy();

    header("Location: /");
  }
}
