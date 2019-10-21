<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-10">
                <!-- pageheader  -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header" id="top">
                            <h2 class="pageheader-title">Edit Profil</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="<?= base_url(). 'Admin' ?>" class="breadcrumb-link">
                                                Dashboard
                                            </a>
                                        </li>

                                        <li class="breadcrumb-item">
                                            <a href="<?= base_url(). 'Admin' ?>" class="breadcrumb-link">
                                                Profile
                                            </a>
                                        </li>

                                        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end pageheader  -->

                <!-- basic form  -->
                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                      <h5 class="card-header" id="profil">Profil</h5>

                      <div class="card-body">
                        <form action="<?= base_url(). 'Admin/update' ?>" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label>Photo</label>
                            <div class="custom-file mb-3">
                              <input type="file" name="<?= Seller_model::$LOGO_URI ?>"
                                     class="custom-file-input" id="customFile"
                                     value="<?= isset($logo_uri)? $logo_uri: ''?>">
                              <label class="custom-file-label" for="customFile">Photo</label>
                            </div>
                          </div>

                          <div class="form-group">
                              <label for="inputText3" class="col-form-label">Nama</label>
                              <input id="inputText3" type="text" class="form-control"
                                     placeholder="Nama"  name="<?= Seller_model::$NAME ?>"
                                     value="<?= isset($name)? $name: ''?>">
                          </div>

                          <div class="form-group">
                              <label for="inputEmail">Alamat Email</label>
                              <input id="inputEmail" type="email" class="form-control"
                                     placeholder="name@example.com"
                                     name="<?= Auth_model::$EMAIL ?>"
                                     value="<?= isset($email)? $email: ''?>">
                          </div>

                          <div class="form-group">
                              <label for="inputText4" class="col-form-label">Nomor Telepon</label>
                              <input id="inputText4" type="number" class="form-control"
                                     placeholder="Nomor Telepon"
                                     name="<?= Seller_model::$PHONE_NUMBER ?>"
                                     value="<?= isset($phonenumber)? $phonenumber: ''?>">
                          </div>

                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">Deskripsi Toko</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        name="<?= Seller_model::$DESCRIPTION ?>"
                              ><?= isset($description)? $description: ''?></textarea>
                          </div>
                        </div>

                        <div class="card-body border-top">
                            <h3 id="alamat">Alamat Toko</h3>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Jalan</label>
                                <input id="inputText3" type="text" class="form-control"
                                       name="<?= Address_model::$STREET ?>"
                                       value="<?= isset($street)? $street: ''?>">
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Kode Pos</label>
                                <input id="inputText3" type="text" class="form-control"
                                       name="<?= Address_model::$ZIPCODE ?>"
                                       value="<?= isset($zipcode)? $zipcode: ''?>">
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Kota</label>
                                <input id="inputText3" type="text" class="form-control"
                                       name="<?= Address_model::$CITY ?>"
                                       value="<?= isset($city)? $city: ''?>">
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Provinsi</label>
                                <input id="inputText3" type="text" class="form-control"
                                       name="<?= Address_model::$PROVINCE ?>"
                                       value="<?= isset($province)? $province: ''?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                          name="<?= Address_model::$ADDRESS ?>"
                                ><?= isset($address)? $address: ''?></textarea>
                            </div>

                            <div class="input-group-prepend be-addon" id="save-data">
                              <button tabindex="-1" type="submit" class="btn btn-primary" id="save-data">
                                Simpan
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                  </div>
              </div>
            </div>

            <!-- sidenavbar -->
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                <div class="sidebar-nav-fixed">
                    <ul class="list-unstyled">
                        <li><a href="#profil" class="active">Profil</a></li>
                        <li><a href="#alamat">Alamat</a></li>
                        <li><a href="#save-data">Simpan Data</a></li>
                    </ul>
                </div>
            </div>
            <!-- end sidenavbar -->
        </div>
    </div>