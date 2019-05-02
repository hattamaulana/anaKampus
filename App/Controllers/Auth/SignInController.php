<?php

namespace App\Controllers\Auth;

use App\Models\User\UserModel;
use App\Controllers\Controller;

class SignInController extends Controller {
  public function view() {
    parent::show('auth/signIn');
  }

  public function signIn($req) {
    $user  = new UserModel();
    $input = $req->getBody();
    $input = [
      $user->email => $input[$user->email],
      $user->password => $input[$user->password]
    ];

    $response = $user->signIn($data);
    if ($response['message'] === 'success'){
      header("Location: /");
    } else {
      header("Location: /login");
    }
  }
}
