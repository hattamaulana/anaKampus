<?php

namespace App\Controllers;

class Controller {
  protected function view($view = '', $data = []) {
    $path = __DIR__. "/../Views/";
    
    require_once $path. $view. ".php";
  }
}
