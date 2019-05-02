<?php 

namespace App\Controllers\User;

use App\Models\Session;
use App\Models\User\AuthModel;
use App\Controllers\Controller;

class ProfileController extends Controller {
  public function view() {
    $sesi = new Session();
    $uid  = $sesi->get([AuthModel::$uid]);

    if($uid{0} === 'S')
      parent::show('seller/profile');
    else
      parent::show('index');
  }
}
