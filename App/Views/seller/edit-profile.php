<?php # Testing Code
# die(print_r($data['address']));
?>

<?php require_once __DIR__.'/../templates/header-seller.php' ?>
<?php require_once __DIR__.'/../templates/left-sidebar-seller.php' ?>

<?php # Get Data
$name        = ($data['bio']['name'] == '') ?  '' : $data['bio']['name']; 
$email       = ($data['bio']['email'] == '') ?  '' : $data['bio']['email'];
$phonenumber = ($data['bio']['phonenumber'] == '') ?  '' : $data['bio']['phonenumber'];
$description = ($data['bio']['description'] == '') ?  '' : $data['bio']['description'];
$street      = ($data['address']['street'] == '') ?  '' : $data['address']['street'];
$zipcode     = ($data['address']['zipcode'] == '') ?  '' : $data['address']['zipcode'];
$city        = ($data['address']['city'] == '') ?  '' : $data['address']['city'];
$province    = ($data['address']['province'] == '') ?  '' : $data['address']['province'];
$address     = ($data['address']['address'] == '') ?  '' : $data['address']['address'];
?>

<div class="dashboard-wrapper">
<div class="container-fluid dashboard-content">
    <div class="row">
        <div class="col-xl-10">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header" id="top">
                        <h2 class="pageheader-title">Edit Profil Toko</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Profile</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end pageheader  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- basic form  -->
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                  <h5 class="card-header">Bio Toko</h5>

                  <div class="card-body">
                    <form action="/profile-edit" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Ganti Logo</label>
                        <div class="custom-file mb-3">
                          <input type="file" name="logo_uri" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Logo</label>
                        </div>
                      </div>

                      <div class="form-group">
                          <label for="inputText3" class="col-form-label">Nama Toko</label>
                          <input id="inputText3" name="name" placeholder="Nama" type="text" class="form-control" value="<?php echo $name ?>">
                      </div>

                      <div class="form-group">
                          <label for="inputEmail">Alamat Email</label>
                          <input id="inputEmail" type="email" placeholder="name@example.com" name="email" class="form-control" value="<?php echo $email ?>">
                          <p>Gunakan Satu Email untuk selamanya</p>
                      </div>

                      <div class="form-group">
                          <label for="inputText4" class="col-form-label">Nomor Telepon</label>
                          <input id="inputText4" type="number" class="form-control" placeholder="Nomor Telepon" name="phonenumber" value="<?php echo $phonenumber; ?>">
                      </div>

                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">Deskripsi Toko</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"><?php echo $description; ?></textarea>
                      </div>
                    </div>

                    <div class="card-body border-top">
                        <h3 id="alamat-toko">Alamat Toko</h3>
                        
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Jalan</label>
                            <input id="inputText3" name="street" type="text" class="form-control" value="<?php echo $street; ?>">
                        </div>

                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Kode Pos</label>
                            <input id="inputText3" name="zipcode" type="text" class="form-control" value="<?php echo $zipcode; ?>">
                        </div>
                          
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Kota</label>
                            <input id="inputText3" name="city" type="text" class="form-control" value="<?php echo $city; ?>">
                        </div>

                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Provinsi</label>
                            <input id="inputText3" name="province" type="text" class="form-control" value="<?php echo $province; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                            <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo trim($address); ?></textarea>
                        </div>

                        <div class="input-group-prepend be-addon" id="save-data">
                          <button tabindex="-1" type="submit" class="btn btn-secondary">
                            Simpan
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
          </div>
        </div>

        <!-- ============================================================== -->
        <!-- sidenavbar -->
        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
            <div class="sidebar-nav-fixed">
                <ul class="list-unstyled">
                    <li><a href="#overview" class="active">Bio Toko</a></li>
                    <li><a href="#alamat-toko">Alamat Toko</a></li>
                    <li><a href="#save-data">Simpan Data</a></li>
                    <li><a href="#top">Back to Top</a></li>
                </ul>
            </div>
        </div>
        <!-- end sidenavbar -->
        <!-- ============================================================== -->
    </div>
</div>

<?php require_once __DIR__.'/../templates/footer-seller.php' ?>