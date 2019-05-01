<?php

namespace App\Controllers\View;

use App\Controllers\Controller;

class HomeView extends Controller {
  public function show() {
    parent::view('index');
  }
}
