<?php # die(print_r($data)); ?>
<?php require_once __DIR__. '/../templates/header.php' ?>

<!--================Single Product Area =================-->
<div class="product_image_area" style="margin-top: 100px">
  <div class="container">
    <div class="row s_product_inner">
      <div class="col-lg-6">
        <div class="s_product_img">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-75" src="<?php echo ($data['photo'] == null) ? 'Storage/Product/default.jpg': $data['photo'] ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1">
        <div class="s_product_text">
          <h3> <?php echo $data['name']; ?> </h3>
          <h2> Rp <?php echo $data['price']; ?>,00 </h2>
          <ul class="list">
            <li>
              <a class="active" href="#">
                <span>Category</span> : <?php echo $data['category'] ?> </a>
            </li>
            <li>
              <a href="#">
                <span>Availibility</span> : In Stock</a>
            </li>
          </ul>
          <p></p>
          <div class="card_area">
            <a class="main_btn" href="/add-cart?p=<?php echo $data['pid']; ?>">Add to Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
  <div class="container">
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active"id="home" role="tabpanel" aria-labelledby="home-tab">
        <p> <?php echo $data['description']; ?> </p>
      </div>
    </div>
  </div>
</section>
<!--================End Product Description Area =================-->

<?php require_once __DIR__. '/../templates/footer.php' ?>