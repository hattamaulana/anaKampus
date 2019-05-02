<?php

namespace App\Controllers;

class Controller {
  protected function show($view = '', $data = []) {
    $path = __DIR__. "/../Views/";
    
    require_once $path. $view. ".php";
  }
}
