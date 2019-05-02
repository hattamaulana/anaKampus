<?php

namespace App\Controllers;

use App\Controllers\Controller;

class HomeView extends Controller {
  public function view() {
    parent::show('index');
  }
}
