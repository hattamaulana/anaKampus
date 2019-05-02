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
    $sesi  = new Session();
    $user  = new AuthModel();
    $input = $req->getBody();
    $input = [
      $user->email => $input[$user->email],
      $user->password => $input[$user->password]
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
}
