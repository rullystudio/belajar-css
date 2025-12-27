 <main>
  <!-- section -->
  <section>
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- col -->
        <div class="col-12">
          <div class="d-flex justify-content-between align-items-center d-md-none py-4">
            <!-- heading -->
            <h3 class="fs-5 mb-0">Account Setting</h3>
            <!-- button -->
            <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount" aria-controls="offcanvasAccount">
              <i class="bi bi-text-indent-left fs-3"></i>
            </button>
          </div>
        </div>
        <!-- col -->
        <?php 
          $this->load->view('content/account/profile/sidebar')
        ?>
        <div class="col-lg-9 col-md-8 col-12">
          <div class="py-6 p-md-6 p-lg-10">


			<div class="row justify-content-between mb-6">
				<div class="col-lg-6 col-sm-12 mb-3">
					<h4 class="mb-0">Wishlist Saya</h4>
				</div>
			    <div class="col-lg-5 col-sm-12 mb-3">
			        <form id="pencarian">
			            <div class="input-group">
			                <input type="text" class="form-control" name="q" >
			                <button type="button" class="btn btn-primary">Cari</button>
			            </div>
			        </form>
			    </div>

			    <div id="data" class="col-lg-12 mt-1 mb-9 mb-lg-2 py-3 py-lg-2">
			    </div> 
			</div>

            <div id="data"></div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

