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
              <h5 class="card-header">Data Diri | <a href="/profile-edit">Edit</a></h5>

              <div class="card-body">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Nama</label>
                    <input id="inputText3" name="name" value="<?php echo $name ?>" type="text" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Alamat Email</label>
                    <input id="inputEmail"  type="email" value="<?php echo $email ?>" name="email" class="form-control" readonly>
                </div>

                <label for="inputText4" class="col-form-label">Jenis Kelamin</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <input type="checkbox" <?php echo ($gender == 'L') ? 'checked': '' ?> aria-label="Radio button for following text input" disabled>
                    </div>
                  </div>
                  <input type="text" class="form-control"  <?php echo ($gender == 'P') ? 'checked': '' ?> aria-label="Text input with radio button" value="Laki-laki" readonly>

                <div class="input-group-prepend">
                    <div class="input-group-text">
                      <input type="checkbox" aria-label="Radio button for following text input" disabled>
                    </div>
                  </div>
                  <input type="text" class="form-control" aria-label="Text input with radio button" value="Perempuan" readonly>
                </div>

                <br>

                <div class="form-group">
                    <label for="inputText4" class="col-form-label">Tempat Kelahiran</label>
                    <input id="inputText4" type="text" class="form-control" value="<?php echo $place_birth ?>" name="place_birth" readonly>
                </div>

                <div class="form-group">
                    <label for="inputText4" class="col-form-label">Tanggal Lahir</label>
                    <input id="inputText4" type="text" class="form-control" value="<?php echo $date_birth ?>" name="date_birth" readonly>
                </div>

                <div class="form-group">
                    <label for="inputText4" class="col-form-label">Nomor Telepon</label>
                    <input id="inputText4" type="number" class="form-control" value="<?php echo $phone_number ?>" name="phonenumber" readonly>
                </div>
              </div>

              <div class="card-body border-top">
                  <h3 id="alamat-toko">Alamat</h3>
                  
                  <div class="form-group">
                      <label for="inputText3" class="col-form-label">Jalan</label>
                      <input id="inputText3" name="street" type="text" class="form-control" value="<?php echo $street ?>" readonly>
                  </div>

                  <div class="form-group">
                      <label for="inputText3" class="col-form-label">Kode Pos</label>
                      <input id="inputText3" name="zipcode" value="<?php echo $zip_code ?>" type="text" class="form-control" readonly>
                  </div>
                    
                  <div class="form-group">
                      <label for="inputText3" class="col-form-label">Kota</label>
                      <input id="inputText3" name="city" value="<?php echo $city ?>" type="text" class="form-control" readonly>
                  </div>

                  <div class="form-group">
                      <label for="inputText3" class="col-form-label">Provinsi</label>
                      <input id="inputText3" name="province" value="<?php echo $province ?>" type="text" class="form-control" readonly>
                  </div>

                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                      <textarea name="address" readonly class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $address ?></textarea>
                  </div>
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