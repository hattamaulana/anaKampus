<?php 
$name = ($data['bio']['name'] != '') ? $data['bio']['name'] : '';
$email = ($data['bio']['email'] != '') ? $data['bio']['email'] : '';
$photo = ($data['bio']['profile_uri'] != '') ? $data['bio']['profile_uri'] : '';
$gender = ($data['bio']['gender'] != '') ? $data['bio']['gender'] : '';
$date_birth = ($data['bio']['date_birth'] != '') ? $data['bio']['date_birth'] : '';
$place_birth = ($data['bio']['place_birth'] != '') ? $data['bio']['place_birth'] : '';
$phone_number = ($data['bio']['phonenumber'] != '') ? $data['bio']['phonenumber'] : '';

$city = ($data['address']['city'] != '') ? $data['address']['city'] : '';
$street = ($data['address']['street'] != '') ? $data['address']['street'] : '';
$address = ($data['address']['address'] != '') ? $data['address']['address'] : '';
$province = ($data['address']['province'] != '') ? $data['address']['province'] : '';
$zip_code = ($data['address']['zipcode'] != '') ? $data['address']['zipcode'] : ''; 

require_once __DIR__. '/../templates/header.php'; ?>

<section style="margin-top: 200px; margin-bottom: 100px">
  <div class="container-fluid dashboard-content">
    <div class="row">
      <div class="col-xl-12">
        <div class="row">
          <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7">
            <div class="card">
              <h5 class="card-header">Data Diri</h5>

              <div class="card-body">
                <form method="post" action="/profile-edit-buyer">
                  <div class="form-group">
                      <label for="inputText3" class="col-form-label">Nama</label>
                      <input id="inputText3" name="name" value="<?php echo $name ?>" type="text" class="form-control">
                  </div>

                  <div class="form-group">
                      <label for="inputEmail">Alamat Email</label>
                      <input id="inputEmail" type="email" value="<?php echo $email ?>" name="email" class="form-control">
                  </div>

                  <label for="inputText4" class="col-form-label">Jenis Kelamin</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="radio" name="gender" value="L" aria-label="Radio button for following text input">
                      </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with radio button" value="Laki-laki" readonly>

                  <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="radio" name="gender" value="P" aria-label="Radio button for following text input">
                      </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with radio button" value="Perempuan" readonly>
                  </div>

                  <br>

                  <div class="form-group">
                      <label for="inputText4" class="col-form-label">Tempat Kelahiran</label>
                      <input id="inputText4" type="text" class="form-control" value="<?php echo $place_birth ?>" name="place_birth">
                  </div>

                  <div class="form-group">
                      <label for="inputText4" class="col-form-label">Tanggal Lahir</label>
                      <input id="inputText4" type="date" class="form-control" value="<?php echo $date_birth ?>" name="date_birth">
                  </div>

                  <div class="form-group">
                      <label for="inputText4" class="col-form-label">Nomor Telepon</label>
                      <input id="inputText4" type="text" class="form-control" value="<?php echo $phone_number ?>" name="phonenumber">
                  </div>
                </div>

                <div class="card-body border-top">
                    <h3 id="alamat-toko">Alamat</h3>
                    
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Jalan</label>
                        <input id="inputText3" name="street" type="text" class="form-control" value="<?php echo $street ?>">
                    </div>

                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Kode Pos</label>
                        <input id="inputText3" name="zipcode" value="<?php echo $zip_code ?>" type="text" class="form-control">
                    </div>
                      
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Kota</label>
                        <input id="inputText3" name="city" value="<?php echo $city ?>" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Provinsi</label>
                        <input id="inputText3" name="province" value="<?php echo $province ?>" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                        <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $address ?></textarea>
                    </div>

                    <div class="input-group-prepend be-addon" id="save-data">
                      <button tabindex="-1" type="submit" class="btn btn-primary">
                        Simpan
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__. '/../templates/footer.php'; ?>