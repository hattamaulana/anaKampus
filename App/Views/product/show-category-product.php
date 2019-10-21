<?php # die(print_r($data)) ?>
<?php require_once __DIR__. '/../templates/header.php'; ?>
<!--================Category Product Area =================-->
<section class="cat_product_area section_gap" style="margin-top: 100px">
<div class="container-fluid">
  <div class="row flex-row-reverse">
    <div class="col-lg-9">
      <div class="latest_product_inner row">
        <?php foreach($data['data'] as $key => $value) { ?>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="f_p_item">
            <div class="f_p_img">
              <img class="img-fluid" src="<?php echo ($value['photo'] == null) ? 'storage/product/default.jpg': $value['photo'] ?>" alt="">
              <div class="p_icon">
                <a href="/add-cart?p=<?php echo $value['pid']; ?>">
                  <i class="lnr lnr-cart"></i>
                </a>
              </div>
            </div>
            <a href="/detail-product?p=<?php echo $value['pid'] ?>">
              <h4> <?php echo $value['name']; ?> </h4>
            </a>
            <h5>Rp. <?php echo $value['price']; ?>,00 </h5>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="left_sidebar_area">
        <aside class="left_widgets cat_widgets">
          <div class="l_w_title">
            <h3>Kategori Produk</h3>
          </div>
          <div class="widgets_inner">
            <ul class="list">
              <li>
                <a href="/filter-category?c=sticker">Sticker</a>
              </li>

              <li>
                <a href="/filter-category?c=t-shirt">T-Shirt</a>
              </li>

              <li>
                <a href="/filter-category?c=hoodie">Hoodie</a>
              </li>
            </ul>
          </div>
        </aside>

        <aside class="left_widgets cat_widgets">
          <div class="l_w_title">
            <h3>Filter Hasil</h3>
          </div>
          
          <div class="widgets_inner">
            <form action="/filter-set" method="get">
              <ul class="list-group">
                <li style="border: none; list-style: none; margin-bottom: 5px">
                  <select class="show" name="category">
                    <option value="STICKER"> STICKER </option>
                    <option value="T-SHIRT"> T-SHIRT </option>
                    <option value="HOODIE"> HOODIE </option>
                  </select>
                </li>

                <li style="border: none; list-style: none; margin-bottom: 5px">
                  <select class="sorting" name="sort">
                    <option value="ASC">Sorting Harga terendah</option>
                    <option value="DESC">Sorting Harga tertinggi</option>
                  </select>
                </li>

                <li style="border: none; list-style: none; margin-bottom: 5px">
                  <select class="show" name="limit">
                    <option value="20"> Show 20 </option>
                    <option value="40"> Show 40 </option>
                    <option value="80"> Show 80 </option>
                  </select>
                </li>

                <li style="border: none; list-style: none; margin-bottom: 5px">
                  <button type="submit" class="btn btn-primary">Terapkan</button>
                </li>
              </ul>
            </form>
          </div>
        </aside>
      </div>
    </div>
  </div>

  <div class="row" style="margin-top: 100px">
				<nav class="cat_page mx-auto" aria-label="Page navigation example">
          <?php $paginate = ceil($data['paginate'] / 12); ?>
          <?php $position = $data['position']; ?>
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="<?php echo ($position == 1) ? '#' : '/show-category?p='. ($position - 1) ?>">
								<i class="fa fa-chevron-left" aria-hidden="true"></i>
							</a>
            </li>
            <?php for($i = 1; $i <= $paginate; $i++) { ?>
						<li class="page-item <?php echo ($position == $i) ? 'active' : '' ?>">
							<a class="page-link" href="<?php echo ($position == $i) ? '#' : '/show-category?p='.$i ?>"> <?php echo $i ?></a>
            </li>
            <?php } ?>
						<li class="page-item">
							<a class="page-link" href="<?php echo ($position == $paginate) ? '#' : '/show-category?p='.($position + 1) ?>">
								<i class="fa fa-chevron-right" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</nav>
			</div>
</div>
</section>

<?php require_once __DIR__. '/../templates/footer.php'; ?>