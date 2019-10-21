<div class="nav-left-sidebar sidebar-light">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button"
                    data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link active" href="<?= base_url(). 'Admin/' ?>"
                           data-toggle="collapse" data-target="#submenu-1"
                           aria-expanded="false" aria-controls="submenu-1"
                        >
                            <i class="fa fa-fw fa-user-circle"></i>
                            Profil
                        </a>

                        <div id="submenu-1" class="collapse submenu bg-light" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(). 'Admin' ?>">
                                        Tampilkan Profil
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(). 'Admin/edit' ?>">
                                        Edit Profil
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(). 'auth/logout' ?>">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"
                           data-toggle="collapse" aria-expanded="false"
                           data-target="#submenu-2" aria-controls="submenu-2"
                        >
                            <i class="fa fa-fw fa-rocket"></i>
                            Produk
                        </a>
                        <div id="submenu-2" class="collapse submenu bg-light" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/cards.html">
                                        Tambah Produk
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="pages/cards.html">
                                        Manage Produk
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>