<?php

namespace App\Controllers\View;

use App\Controllers\Controller;

class SignUpController extends Controller {
  public function show() {
    parent::view('auth/signUp');
  }
}
