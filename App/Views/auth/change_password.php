<?php require_once __DIR__.'/../templates/header-seller.php' ?>
<?php require_once __DIR__.'/../templates/left-sidebar-seller.php' ?>
<!-- Modal -->
<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Status Ganti Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo (isset($data['message'])) ? $data['message'] : '' ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="dashboard-wrapper">
<div class="container-fluid dashboard-content">
    <div class="row">
        <div class="col-xl-10">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header" id="top">
                        <h2 class="pageheader-title">Ganti Password</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Profile</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ganti Password</li>
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
                  <h5 class="card-header">Ganti Password</h5>

                  <div class="card-body">
                    <form action="/change-password" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="inputText3" class="col-form-label">Password Lama</label>
                          <input id="inputText3" name="old_password" type="password" class="form-control">
                      </div>

                      <div class="form-group">
                          <label for="inputText3" class="col-form-label">Password Baru</label>
                          <input id="inputText3" name="new_password" type="password" class="form-control">
                      </div>
                          
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Password Baru (Verify)</label>
                            <input id="inputText3" name="verify_password" type="password" class="form-control">
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
<?php if(isset($data['message'])) { ?>
  <script type="text/javascript">
    $(window).on('load', function() {
      $('#message').modal('show');

    });
  </script>
<?php } ?>