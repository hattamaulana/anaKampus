<?php

namespace App\Controllers;

class Controller {
  protected function show($view = '', $data = []) {
    $path = __DIR__. "/../Views/";
    
    require_once $path. $view. ".php";
  }

  protected function getInput($req, $input) {
    foreach($input as $val) {
      if(isset($req->getBody()[$val]))
        $result[$val] = $req->getBody()[$val];
      else
        $result[$val] = null;
    }

    return $result;
  }
}
