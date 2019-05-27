<?php 

namespace App\Controllers\User;

use App\Models\Session;
use App\Controllers\Controller;
use App\Models\User\AuthModel as Auth;
use App\Models\User\BuyerModel as Buyer;
use App\Models\User\SellerModel as Seller;
use App\Models\User\AddressModel as Address;

class ProfileController extends Controller {
  public static function view() {
    $sesi = new Session();
    if(! $sesi->isExists(Auth::$uid))
      header("Location: /login");

    $uid  = $sesi->get([Auth::$uid]);
    $address = new Address();
    if(self::isSeller($uid)){
      $seller = new Seller();
      $data['bio'] = $seller->print($uid);
      $data['address'] = $address->print($uid);
      $data['bio'][Auth::$email] = $sesi->get([Auth::$email]);

      parent::show('seller/profile', $data);
    } else {
      $buyer = new Buyer();
      $data['bio'] = $buyer->print($uid);
      $data['address'] = $address->print($uid);
      $data['bio'][Auth::$email] = $sesi->get([Auth::$email]);

      parent::show('buyer/profile', $data);
    }
  }

  public static function editView() {
    die();
    $sesi = new Session();
    $uid  = $sesi->get([Auth::$uid]);
    $address = new Address();
    if(self::isSeller($uid)) {
       $seller = new Seller();
       $data['bio'] = $seller->print($uid);
       $data['address'] = $address->print($uid);
       $data['bio'][Auth::$email] = $sesi->get([Auth::$email]);
       
       parent::show('seller/edit-profile', $data);
    } else {
      $buyer = new Buyer();
      $data['bio'] = $buyer->print($uid);
      $data['address'] = $address->print($uid);
      $data['bio'][Auth::$email] = $sesi->get([Auth::$email]);

      parent::show('buyer/edit-profile', $data);
    }
  }

  public static function edit($req) {
    $updated = true;
    $seller  = new Seller();
    $address = new Address();
    $session = new Session();
    $key_seller   = [ Seller::$NAME, Seller::$LOGO, Seller::$EMAIL, Seller::$PHONENUMBER, Seller::$DESCRIPTION ];
    $key_address  = [ Address::$STREET, Address::$ZIPCODE, Address::$CITY, Address::$PROVINCE, Address::$ADDRESS ];
    $data_seller  = parent::getInput($req, $key_seller);
    $data_address = parent::getInput($req, $key_address);
    $data_seller[Seller::$UID]   = $session->get([Seller::$UID]);
    $data_address[Address::$AID] = $session->get([Seller::$UID]);

    if( $data_seller[Auth::$name] != $session->get([Auth::$name]) ||
        $data_seller[Auth::$email] != $session->get([Auth::$email])
    ) {
      $update = [ 
        Auth::$name  => $data_seller[Auth::$name],
        Auth::$email => $data_seller[Auth::$email],
        Seller::$UID => $session->get([Seller::$UID])
      ];

      $updated = $seller->edit($update, Auth::$TABLE);
      $session->add($update);
    }

    unset($data_seller[Seller::$EMAIL]);
    if($seller->edit($data_seller) && $updated)
      if($address->isUidExist($data_address[Address::$AID]))
        $updated = $address->add($data_address);
      else
        $updated = $address->edit($data_address);

    if($updated)
      header('Location: /profile');
    else 
      header('Location: /profile-edit');
  }

  public static function editBuyer($req) {
    $updated = TRUE;
    $address = new Address();
    $session = new Session();
    $buyer = new Buyer();
    $key_buyer   = [ Buyer::$PHOTO, Buyer::$NAME, Auth::$email, Buyer::$GENDER, Buyer::$PLACEBIRTH, Buyer::$DATEBIRTH, Buyer::$PHONENUMBER ];
    $key_address  = [ Address::$STREET, Address::$ZIPCODE, Address::$CITY, Address::$PROVINCE, Address::$ADDRESS ];
    $data_buyer  = parent::getInput($req, $key_buyer);
    $data_address = parent::getInput($req, $key_address);
    $data_buyer[Seller::$UID]   = $session->get([Seller::$UID]);
    $data_address[Address::$AID] = $session->get([Seller::$UID]);

    if( $data_buyer[Auth::$name] != $session->get([Auth::$name]) ||
        $data_buyer[Auth::$email] != $session->get([Auth::$email])
    ) {
      $update = [ 
        Auth::$name  => $data_buyer[Auth::$name],
        Auth::$email => $data_buyer[Auth::$email],
        Buyer::$UID => $session->get([Buyer::$UID])
      ];

      $updated = $buyer->edit($update, Auth::$TABLE);
      $session->add($update);
    }

    unset($data_buyer[Auth::$email]);
    if($buyer->edit($data_buyer) && $updated)
      if($address->isUidExist($data_address[Address::$AID]))
        $updated = $address->add($data_address);
      else
        $updated = $address->edit($data_address);

    if($updated)
      header('Location: /profile');
    else 
      header('Location: /profile-edit');
  }

  public static function changePassword() {
    parent::show('auth/change_password');
  }

  public static function modifyPassword($req) {
    $input = parent::getInput($req, ['old_password', 'new_password', 'verify_password']);

    if($input['new_password'] == $input['verify_password']) {
      $auth = new Auth();
      $session = new Session();

      unset($input['verify_password']);
      $uid = $session->get([Auth::$uid]);
      if($auth->changePassword($uid, $input))
        $data = ['message' => "Berhasil Ganti Password"];
      else
        $data = ['message' => "Maaf, Password Lama Salah"];
    } else {
        $data = ['message' => "Password tidak sesuai"];
        $data['error'] = ['new_password' => 'Password Baru Tidak Match'];
        $data['error'] = ['verify_password' => 'Password Baru Tidak Match'];
    }
    
    parent::show('auth/change_password', $data);
  }

  private static function isSeller($uid) {
    return $uid{0} === 'S';
  }
}
