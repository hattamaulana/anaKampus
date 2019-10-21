<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- pageheader  -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h1 class="pageheader-title"> Data Product </h1>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Product</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end pageheader  -->

            <div class="ecommerce-widget">
                <div class="row">
                    <!-- recent orders  -->
                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Data Product</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0"
                                                    style="text-align: center"
                                                >
                                                    ID
                                                </th>
                                                <th class="border-0">
                                                    Photo
                                                </th>
                                                <th class="border-0">Nama</th>
                                                <th class="border-0">Edit</th>
                                                <th class="border-0">Hapus</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php foreach ($data as $key => $value) {  ?>
                                                <tr>
                                                    <td style="text-align: center">
                                                        <?php echo $value[Product_model::$PID] ?>
                                                    </td>

                                                    <td>
                                                        <img width="75" height="75"
                                                             src="<?= base_url('storage/product/'
                                                                    . $value[Product_model::$PHOTO])?>">
                                                    </td>
                                                    <td> <?php echo $value[Product_model::$NAME] ?> </td>

                                                    <td>
                                                        <a class="nav-link"
                                                           href="<?= base_url(). 'produk/edit/'
                                                                . $value[Product_model::$PID] ?>">
                                                            <i class="fa fa-fw fa-edit"></i>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <a class="nav-link"
                                                           href="<?= base_url(). 'produk/delete/'
                                                                . $value[Product_model::$PID] ?>">
                                                            <i class="fa fa-fw fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end recent orders  -->
                </div>
            </div>
        </div>
    </div>