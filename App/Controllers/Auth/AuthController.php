<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;

class AuthController extends Controller {
  public function signUp($request) {
    $data = array('data' => "Hello World!" );
    parent::view('index', $data);
  }
}
