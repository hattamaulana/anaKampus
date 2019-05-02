<?php

namespace App\Models;

class Session {
  public function __construct() {
    session_start();
  }

  public function add($args = []) {
    foreach ($args as $key => $value) {
      $_SESSION[$key] = $value;
    }
  }

  public function destroy() {
    session_destroy();
  }

  public function get($key) {
    return $_SESSION[$key[0]];
  }
}
