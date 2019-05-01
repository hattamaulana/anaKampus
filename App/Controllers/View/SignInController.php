<?php

namespace App\Controllers\View;

use App\Controllers\Controller;

class SignInController extends Controller {
  public function show() {
    parent::view('login');
  }
}
