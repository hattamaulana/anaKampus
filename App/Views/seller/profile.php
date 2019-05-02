<?php require_once __DIR__.'/../templates/header-seller.php' ?>

<div class="nav-left-sidebar sidebar-dark">
<div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
                <li class="nav-divider">
                    Menu
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                    <div id="submenu-1" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                <div id="submenu-1-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html">E Commerce Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-product.html">Product List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard-finance.html">Finance</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard-sales.html">Sales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                <div id="submenu-1-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-influencer.html">Influencer</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="influencer-profile.html">Influencer Profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>UI Elements</a>
                    <div id="submenu-2" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/cards.html">Cards <span class="badge badge-secondary">New</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/general.html">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/carousel.html">Carousel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/listgroup.html">List Group</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/typography.html">Typography</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/accordions.html">Accordions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/tabs.html">Tabs</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
                    <div id="submenu-3" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/chart-c3.html">C3 Charts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/chart-chartist.html">Chartist Charts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/chart-charts.html">Chart</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/chart-morris.html">Morris</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/chart-sparkline.html">Sparkline</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/chart-gauge.html">Guage</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                    <div id="submenu-4" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/form-elements.html">Form Elements</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/form-validation.html">Parsely Validations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/multiselect.html">Multiselect</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/datepicker.html">Date Picker</a>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link" href="pages/bootstrap-select.html">Bootstrap Select</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                    <div id="submenu-5" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/general-table.html">General Tables</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-divider">
                    Features
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>
                    <div id="submenu-6" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/blank-page.html">Blank Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/blank-page-header.html">Blank Page Header</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/login.html">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/404-page.html">404 page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/sign-up.html">Sign up Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/forgot-password.html">Forgot Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/pricing.html">Pricing Tables</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/timeline.html">Timeline</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/calendar.html">Calendar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/sortable-nestable-lists.html">Sortable/Nestable List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/widgets.html">Widgets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/media-object.html">Media Objects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/cropper-image.html">Cropper</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/color-picker.html">Color Picker</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
                    <div id="submenu-7" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/inbox.html">Inbox</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/email-details.html">Email Detail</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/email-compose.html">Email Compose</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/message-chat.html">Message Chat</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
                    <div id="submenu-8" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/icon-fontawesome.html">FontAwesome Icons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/icon-material.html">Material Icons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/icon-simple-lineicon.html">Simpleline Icon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/icon-themify.html">Themify Icon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/icon-flag.html">Flag Icons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/icon-weather.html">Weather Icon</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                    <div id="submenu-9" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/map-google.html">Google Maps</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/map-vector.html">Vector Maps</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                    <div id="submenu-10" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Level 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                <div id="submenu-11" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Level 3</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
<div class="influence-profile">
    <div class="container-fluid dashboard-content ">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h3 class="mb-2">Influencer Profile </h3>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Influencer Profile Template</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- profile -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                <!-- ============================================================== -->
                <!-- card profile -->
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body">
                        <div class="user-avatar text-center d-block">
                            <img src="App/Views/templates/assets/seller/images/avatar-1.jpg" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                        </div>
                        <div class="text-center">
                            <h2 class="font-24 mb-0">Michael J. Christy</h2>
                            <p>Project Manager @Influnce</p>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <h3 class="font-16">Contact Information</h3>
                        <div class="">
                            <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i>michaelchristy@gmail.com</li>
                            <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i>(900) 123 4567</li>
                        </ul>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <h3 class="font-16">Rating</h3>
                        <h1 class="mb-0">4.8</h1>
                        <div class="rating-star">
                            <i class="fa fa-fw fa-star"></i>
                            <i class="fa fa-fw fa-star"></i>
                            <i class="fa fa-fw fa-star"></i>
                            <i class="fa fa-fw fa-star"></i>
                            <i class="fa fa-fw fa-star"></i>
                            <p class="d-inline-block text-dark">14 Reviews </p>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <h3 class="font-16">Social Channels</h3>
                        <div class="">
                            <ul class="mb-0 list-unstyled">
                            <li class="mb-1"><a href="#"><i class="fab fa-fw fa-facebook-square mr-1 facebook-color"></i>fb.me/michaelchristy</a></li>
                            <li class="mb-1"><a href="#"><i class="fab fa-fw fa-twitter-square mr-1 twitter-color"></i>twitter.com/michaelchristy</a></li>
                            <li class="mb-1"><a href="#"><i class="fab fa-fw fa-instagram mr-1 instagram-color"></i>instagram.com/michaelchristy</a></li>
                            <li class="mb-1"><a href="#"><i class="fas fa-fw fa-rss-square mr-1 rss-color"></i>michaelchristy.com/blog</a></li>
                            <li class="mb-1"><a href="#"><i class="fab fa-fw fa-pinterest-square mr-1 pinterest-color"></i>pinterest.com/michaelchristy</a></li>
                            <li class="mb-1"><a href="#"><i class="fab fa-fw fa-youtube mr-1 youtube-color"></i>youtube/michaelchristy</a></li>
                        </ul>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <h3 class="font-16">Category</h3>
                        <div>
                            <a href="#" class="badge badge-light mr-1">Fitness</a><a href="#" class="badge badge-light mr-1">Life Style</a><a href="#" class="badge badge-light mr-1">Gym</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end card profile -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end profile -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- campaign data -->
            <!-- ============================================================== -->
            <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
                <!-- ============================================================== -->
                <!-- campaign tab one -->
                <!-- ============================================================== -->
                <div class="influence-profile-content pills-regular">
                    <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-campaign-tab" data-toggle="pill" href="#pills-campaign" role="tab" aria-controls="pills-campaign" aria-selected="true">Campaign</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-packages-tab" data-toggle="pill" href="#pills-packages" role="tab" aria-controls="pills-packages" aria-selected="false">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-selected="false">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-msg-tab" data-toggle="pill" href="#pills-msg" role="tab" aria-controls="pills-msg" aria-selected="false">Send Messages</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="section-block">
                                        <h3 class="section-title">My Campaign State</h3>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h1 class="mb-1">9</h1>
                                            <p>Campaign Invitations</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h1 class="mb-1">35</h1>
                                            <p>Finished Campaigns</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h1 class="mb-1">8</h1>
                                            <p>Accepted Campaigns</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h1 class="mb-1">1</h1>
                                            <p>Declined Campaigns</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-block">
                                <h3 class="section-title">Campaign List</h3>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="media influencer-profile-data d-flex align-items-center p-2">
                                                <div class="mr-4">
                                                    <img src="App/Views/templates/assets/seller/images/slack.png" alt="User Avatar" class="user-avatar-lg">
                                                </div>
                                                <div class="media-body ">
                                                    <div class="influencer-profile-data">
                                                        <h3 class="m-b-10">Your Campaign Title Here</h3>
                                                        <p>
                                                            <span class="m-r-20 d-inline-block">Draft Due Date
                                                                <span class="m-l-10 text-primary">24 Jan 2018</span>
                                                            </span>
                                                            <span class="m-r-20 d-inline-block"> Publish Date
                                                                <span class="m-l-10 text-secondary">30 Feb 2018</span>
                                                            </span>
                                                                <span class="m-r-20 d-inline-block">Ends <span class="m-l-10  text-info">30 May, 2018</span>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top card-footer p-0">
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0">45k</h4>
                                        <p>Total Reach</p>
                                    </div>
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0">29k</h4>
                                        <p>Total Views</p>
                                    </div>
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0">5k</h4>
                                        <p>Total Click</p>
                                    </div>
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0">4k</h4>
                                        <p>Engagement</p>
                                    </div>
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0">2k</h4>
                                        <p>Conversion</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="media influencer-profile-data d-flex align-items-center p-2">
                                                <div class="mr-4">
                                                    <img src="App/Views/templates/assets/seller/images/dribbble.png" alt="User Avatar" class="rounded-circle user-avatar-lg">
                                                </div>
                                                <div class="media-body">
                                                      <h3 class="m-b-10">Your Campaign Title Here</h3>
                                                    <p><span class="m-r-20 d-inline-block">Draft Due Date<span class="m-l-10 d-inline-block text-primary">28 Jan 2018</span></span><span class="m-r-20 d-inline-block"> Publish Date<span class="m-l-10 text-secondary">20 March 2018</span></span><span class="m-r-20">Ends<span class="m-l-10 text-info">10 July, 2018</span></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top card-footer p-0">
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0 ">35k</h4>
                                        <p>Total Reach</p>
                                    </div>
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0 ">45k</h4>
                                        <p>Total Views</p>
                                    </div>
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0">8k</h4>
                                        <p>Total Click</p>
                                    </div>
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0 ">10k</h4>
                                        <p>Engagement</p>
                                    </div>
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0">3k</h4>
                                        <p>Conversion</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="media influencer-profile-data d-flex align-items-center p-2">
                                                <div class="mr-4">
                                                    <img src="App/Views/templates/assets/seller/images/dropbox.png" alt="User Avatar" class="user-avatar-lg">
                                                </div>
                                                <div class="media-body">
                                                      <h3 class="m-b-10">Your Campaign Title Here</h3>
                                                    <p><span class="m-r-20 d-inline-block">Draft Due Date
                                                        <span class="m-l-10 text-primary">05 Feb 2018</span></span>
                                                        <span class="m-r-20 d-inline-block"> Publish Date
                                                            <span class="m-l-10 text-secondary">14 May 2018</span></span><span class="m-r-20 d-inline-block">Ends<span class="m-l-10 text-info">16 Aug, 2018</span></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top card-footer p-0">
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0">40k</h4>
                                        <p>Total Reach</p>
                                    </div>
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0 ">35k</h4>
                                        <p>Total Views</p>
                                    </div>
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0">5k</h4>
                                        <p>Total Click</p>
                                    </div>
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0">15k</h4>
                                        <p>Engagement</p>
                                    </div>
                                    <div class="campaign-metrics d-xl-inline-block">
                                        <h4 class="mb-0">14k</h4>
                                        <p>Conversion</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-packages" role="tabpanel" aria-labelledby="pills-packages-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="section-block">
                                        <h2 class="section-title">My Packages</h2>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-header bg-primary text-center p-3 ">
                                            <h4 class="mb-0 text-white"> Basic</h4>
                                        </div>
                                        <div class="card-body text-center">
                                            <h1 class="mb-1">$150</h1>
                                            <p>Per Month Plateform</p>
                                        </div>
                                        <div class="card-body border-top">
                                            <ul class="list-unstyled bullet-check font-14">
                                                <li>Facebook, Instagram, Pinterest,Snapchat.</li>
                                                <li>Guaranteed follower growth for increas brand awareness.</li>
                                                <li>Daily updates on choose platforms</li>
                                                <li>Stronger customer service through daily interaction</li>
                                                <li>Monthly progress report</li>
                                                <li>1 Million Followers</li>
                                            </ul>
                                            <a href="#" class="btn btn-outline-secondary btn-block btn-lg">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-header bg-info text-center p-3">
                                            <h4 class="mb-0 text-white"> Standard</h4>
                                        </div>
                                        <div class="card-body text-center">
                                            <h1 class="mb-1">$350</h1>
                                            <p>Per Month Plateform</p>
                                        </div>
                                        <div class="card-body border-top">
                                            <ul class="list-unstyled bullet-check font-14">
                                                <li>Facebook, Instagram, Pinterest,Snapchat.</li>
                                                <li>Guaranteed follower growth for increas brand awareness.</li>
                                                <li>Daily updates on choose platforms</li>
                                                <li>Stronger customer service through daily interaction</li>
                                                <li>Monthly progress report</li>
                                                <li>2 Blog Post & 3 Social Post</li>
                                                <li>5 Millions Followers</li>
                                                <li>Growth Result</li>
                                            </ul>
                                            <a href="#" class="btn btn-secondary btn-block btn-lg">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-header bg-primary text-center p-3">
                                            <h4 class="mb-0 text-white">Premium</h4>
                                        </div>
                                        <div class="card-body text-center">
                                            <h1 class="mb-1">$550</h1>
                                            <p>Per Month Plateform</p>
                                        </div>
                                        <div class="card-body border-top">
                                            <ul class="list-unstyled bullet-check font-14">
                                                <li>Facebook, Instagram, Pinterest,Snapchat.</li>
                                                <li>Guaranteed follower growth for increas brand awareness.</li>
                                                <li>Daily updates on choose platforms</li>
                                                <li>Stronger customer service through daily interaction</li>
                                                <li>Monthly progress report & Growth Result</li>
                                                <li>4 Blog Post & 6 Social Post</li>
                                            </ul>
                                            <a href="#" class="btn btn-secondary btn-block btn-lg">Contact us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="card">
                                <h5 class="card-header">Campaign Reviews</h5>
                                <div class="card-body">
                                    <div class="review-block">
                                        <p class="review-text font-italic m-0">“Quisque lobortis vestibulum elit, vel fermentum elit pretium et. Nullam id ultrices odio. Cras id nulla mollis, molestie diam eu, facilisis tortor. Mauris ultrices lectus laoreet commodo hendrerit. Nullam varius arcu sed aliquam imperdiet. Etiam ut luctus augue.”</p>
                                        <div class="rating-star mb-4">
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                        </div>
                                        <span class="text-dark font-weight-bold">Tabitha C. Campbell</span><small class="text-mute"> (Company name)</small>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <div class="review-block">
                                        <p class="review-text font-italic m-0">“Maecenas rutrum viverra augue. Nulla in eros vitae ante ullamcorper congue. Praesent tristique massa ac arcu dapibus tincidunt. Mauris arcu mi, lacinia et ipsum vel, sollicitudin laoreet risus.”</p>
                                        <div class="rating-star mb-4">
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                        </div>
                                        <span class="text-dark font-weight-bold">Luise M. Michet</span><small class="text-mute"> (Company name)</small>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <div class="review-block">
                                        <p class="review-text font-italic m-0">“ Cras non rutrum neque. Sed lacinia ex elit, vel viverra nisl faucibus eu. Aenean faucibus neque vestibulum condimentum maximus. In id porttitor nisi. Quisque sit amet commodo arcu, cursus pharetra elit. Nam tincidunt lobortis augueat euismod ante sodales non. ”</p>
                                        <div class="rating-star mb-4">
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                        </div>
                                        <span class="text-dark font-weight-bold">Gloria S. Castillo</span><small class="text-mute"> (Company name)</small>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <div class="review-block">
                                        <p class="review-text font-italic m-0">“Vestibulum cursus felis vel arcu convallis, viverra commodo felis bibendum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin non auctor est, sed lacinia velit. Orci varius natoque penatibus et magnis dis parturient montes nascetur ridiculus mus.”</p>
                                        <div class="rating-star mb-4">
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                        </div>
                                        <span class="text-dark font-weight-bold">Virgina G. Lightfoot</span><small class="text-mute"> (Company name)</small>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <div class="review-block">
                                        <p class="review-text font-italic m-0">“Integer pretium laoreet mi ultrices tincidunt. Suspendisse eget risus nec sapien malesuada ullamcorper eu ac sapien. Maecenas nulla orci, varius ac tincidunt non, ornare a sem. Aliquam sed massa volutpat, aliquet nibh sit amet, tincidunt ex. Donec interdum pharetra dignissim.”</p>
                                        <div class="rating-star mb-4">
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                        </div>
                                        <span class="text-dark font-weight-bold">Ruby B. Matheny</span><small class="text-mute"> (Company name)</small>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link " href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade" id="pills-msg" role="tabpanel" aria-labelledby="pills-msg-tab">
                            <div class="card">
                                <h5 class="card-header">Send Messages</h5>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-3 col-md-12 col-sm-12 col-12 p-4">
                                                <div class="form-group">
                                                    <label for="name">Your Name</label>
                                                    <input type="text" class="form-control form-control-lg" id="name" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Your Email</label>
                                                    <input type="email" class="form-control form-control-lg" id="email" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="subject">Subject</label>
                                                    <input type="text" class="form-control form-control-lg" id="subject" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="messages">Messgaes</label>
                                                    <textarea class="form-control" id="messages" rows="3"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary float-right">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end campaign tab one -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end campaign data -->
            <!-- ============================================================== -->
        </div>
    </div>
</div>