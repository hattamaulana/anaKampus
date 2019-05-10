<?php 

namespace App\Controllers\User;

use App\Models\Session;
use App\Controllers\Controller;
use App\Models\User\AuthModel as Auth;
use App\Models\User\BuyerModel as Buyer;
use App\Models\User\SellerModel as Seller;
use App\Models\User\AddressModel as Address;

class ProfileController extends Controller {
  public function view() {
    $sesi = new Session();
    if(! $sesi->isExists(Auth::$uid))
      header("Location: /login");

    $uid  = $sesi->get([Auth::$uid]);
    if(self::isSeller($uid)){
      $address = new Address();
      $uid     = $sesi->get([Auth::$uid]);

      if(self::isSeller($uid)) {
        $seller = new Seller();
        $data['bio']     = $seller->print($uid);
        $data['address'] = $address->print($uid);
      }

      $data['bio'][Auth::$email] = $sesi->get([Auth::$email]);
      parent::show('seller/profil', $data);
    } else 
      parent::show('buyer/edit-profile');
  }

  public function editView() {
    $sesi    = new Session();
    $address = new Address();
    $uid     = $sesi->get([Auth::$uid]);

    if(self::isSeller($uid)) {
       $seller = new Seller();
       $data['bio']     = $seller->print($uid);
       $data['address'] = $address->print($uid);
    }

    $data['bio'][Auth::$email] = $sesi->get([Auth::$email]);
    parent::show('seller/edit-profile', $data);
  }

  public function edit($req) {
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

  private static function isSeller($uid) {
    return $uid{0} === 'S';
  }
}
