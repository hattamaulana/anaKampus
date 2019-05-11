<?php require_once __DIR__. '/../templates/header.php'; ?>

<section style="margin-top: 200px; margin-bottom: 100px">
  <div class="container-fluid dashboard-content">
    <div class="row">
      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7">
        <div class="card">
          <h5 class="card-header">Data Diri</h5>

          <div class="card-body">
            <form action="/profile-edit" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="inputText3" class="col-form-label">Nama Toko</label>
                  <input id="inputText3" name="name" value="Nama" type="text" class="form-control" readonly>
              </div>

              <div class="form-group">
                  <label for="inputEmail">Alamat Email</label>
                  <input id="inputEmail" type="email" value="name@example.com" name="email" class="form-control" readonly>
              </div>

              <div class="form-group">
                  <label for="inputText4" class="col-form-label">Nomor Telepon</label>
                  <input id="inputText4" type="number" class="form-control" value="Nomor Telepon" name="phonenumber" readonly>
              </div>

              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Deskripsi Toko</label>
                  <textarea class="form-control" readonly id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
              </div>
            </div>

            <div class="card-body border-top">
                <h3 id="alamat-toko">Alamat Toko</h3>
                
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Jalan</label>
                    <input id="inputText3" name="street" type="text" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Kode Pos</label>
                    <input id="inputText3" name="zipcode" type="text" class="form-control" readonly>
                </div>
                  
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Kota</label>
                    <input id="inputText3" name="city" type="text" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Provinsi</label>
                    <input id="inputText3" name="province" type="text" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                    <textarea name="address" readonly class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__. '/../templates/footer.php'; ?>