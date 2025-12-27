
  <main>
    <section class="mt-8">
      <div class="container">
        <div class="hero-slider ">
          <?php 
            foreach ($slider as $s) {
          ?>
          <div style="background: url(<?php echo base_url() ; ?>uploads/slider/<?php echo $s->gambar ; ?>)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
            <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
              <h2 class="text-dark display-5 fw-bold mt-4"><?php echo $s->judul_slider_1 ; ?></h2>
              <p class="lead"><?php echo $s->deskripsi ; ?></p>
              <a href="#!" class="btn btn-dark mt-3">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
            </div>

          </div>
          <?php 
            } 
          ?>

        </div>
      </div>
    </section>

    <!-- Category Section Start-->
    <section class="mb-lg-10 mt-lg-14 my-8">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-6">

            <h3 class="mb-0">Kategori</h3>

          </div>
        </div>
        <div class="category-slider ">
          <?php 
            foreach ($kategori as $k) {
          ?>
          <div class="item"> 
            <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
              <div class="card card-product mb-lg-4">
                <div class="card-body text-center py-8">
                  <img src="<?php echo base_url() ; ?>uploads/logo/kategori/<?php echo $k->logo_kategori ; ?>" alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                  <div class="text-truncate">Dairy, Bread & Eggs</div>
                </div>
              </div>
            </a>
          </div>
          <?php } ?>




        </div>


      </div>
    </section>
    <!-- Category Section End-->


    <!-- Popular Products Start-->
    <section class="my-lg-14 my-8">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-6">
            <div id="data_detail"></div>
            <h3 class="mb-0">Menu Terlaris</h3>

          </div>
        </div>

        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">

          <?php 
            foreach ($item as $i) {
              $item = strip_tags($i->nama_item) ;
          ?>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">

                <div class="text-center position-relative ">
                  <div class=" position-absolute top-0 start-0">
                    <span class="badge bg-danger">Sale</span>
                  </div>
                  <a href="#!">

                  <div class="col-lg-12" style="background-image: url(<?php echo base_url() ; ?>uploads/foto_item/<?php echo $i->foto_item ; ?>);height: 250px;background-size: 90%; background-position: center; background-repeat: no-repeat;">
                  </div>

                  <div class="card-product-action">
                    <a href="#!" class="btn-action" id="quick-view" data-id="<?php echo $i->id_item ; ?>" ><i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                  </div>

                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Snack &
                      Munchies</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none"><?php echo word_limiter($item, 2) ; ?></a></h2>
                <div>

                  <small class="text-warning"> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5(149)</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$18</span> <span class="text-decoration-line-through text-muted">$24</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add</a></div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          
        </div>
      </div>
    </section>
    <!-- Popular Products End-->
    

 

  </main>