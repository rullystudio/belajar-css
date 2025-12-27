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
            <div class="d-flex justify-content-between mb-6">
              <!-- heading -->
              <h2 class="mb-0">Alamat</h2>
              <!-- button -->
              <a href="<?php echo base_url() ; ?>account/alamat/tambah" class="btn btn-outline-primary">Tambahkan Alamat Baru</a>
            </div>
            <div class="row">
              <!-- col -->
              <?php 
                foreach ($hasil as $row) {
              ?>
              <div class="col-lg-6 col-xxl-4 col-12 mb-4">
                <!-- form -->
                <div class="card">
                  <div class="card-body p-6">
                  <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="homeRadio" <?php if($row->default == 'Ya') { echo "checked" ; } ?> >
                    <label class="form-check-label text-dark fw-semi-bold" for="homeRadio">
                      <?php echo $row->nama_alamat ; ?>
                    </label>
                  </div>
                  <!-- address -->
                  <p class="mb-6"><?php echo $row->detail_alamat ; ?><br>

                    Kecamatan <?php echo $row->nama_kecamatan ; ?><br>

                    <?php echo $row->nama_kabupaten ; ?>, Provinsi <?php echo $row->nama_provinsi ; ?><br>

                    Telepon : <?php echo $row->telepon_user ; ?></p>
                    <!-- btn -->
                    <?php 
                      if($row->default == "Ya") {
                    ?>
                      <a href="#" class="btn btn-info btn-sm">Alamat Default</a>
                    <?php } else { ?>
                      <a href="<?php echo base_url() ; ?>account/alamat/set_default/<?php echo $row->id_alamat ; ?>" class="link-primary">Jadikan Alamat Default</a>
                    <?php } ?>
                  <div class="mt-4">
                    <a href="<?php echo base_url() ; ?>account/alamat/edit/<?php echo $row->id_alamat ; ?>" class="text-inherit">Edit </a>
                    <a href="#" id="hapus" class="text-danger ms-3" data-id="<?php echo $row->id_alamat ; ?>">Delete
                    </a>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
                }
              ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
