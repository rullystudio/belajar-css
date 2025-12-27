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
            
            <div>
              <!-- heading -->
              <div class="row justify-content-center">
                <div class="col-lg-11">
                  
                  <?php if ($this->session->flashdata('pesan')): ?>                        
                    <div class="col-lg-12 py-2">
                      <?php echo $this->session->flashdata('pesan'); ?>
                    </div>
                  <?php endif; ?>
                  <!-- form -->
                  <form method="post" action="<?php echo base_url() ; ?>account/profile/update_setting">
                    <!-- input -->
                    <div class="row mb-3">
                      
                      <div class="col-lg-6 col-sm-12 mb-3 mb-lg-0">                        
                        <div class="mb-0">
                          <label class="form-label">Nama Depan</label>
                          <input type="text" class="form-control" name="nama_depan" value="<?php echo $nama_depan ; ?>">
                          <span style="color: red"><?php echo form_error('nama_depan') ?></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-sm-12 mb-3 mb-lg-0">                        
                        <div class="mb-0">
                          <label class="form-label">Nama Belakang</label>
                          <input type="text" class="form-control" name="nama_belakang" value="<?php echo $nama_belakang ; ?>">
                          <span style="color: red"><?php echo form_error('nama_belakang') ?></span>
                        </div>
                      </div>

                    </div>
                    <!-- input -->
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="text" class="form-control" name="email" value="<?php echo $email ; ?>" readonly>
                      <span style="color: red"><?php echo form_error('email') ?></span>
                    </div>
                    <!-- input -->
                    <div class="mb-5">
                      <label class="form-label">Telepon</label>
                      <input type="text" class="form-control" name="telepon_user" value="<?php echo $telepon_user ; ?>">
                      <span style="color: red"><?php echo form_error('telepon_user') ?></span>
                    </div>

                    <!-- button -->
                    <div class="row">

                      <div class="col-lg-3 ms-auto col-sm-12 py-3 d-grid gap-2 order-2 order-lg-1">
                        <a href="<?php echo base_url() ; ?>account/profile" class="btn btn-dark">
                          <i class="bi bi-arrow-left me-2"></i>
                          Kembali
                        </a>
                      </div>

                      <div class="col-lg-3 col-sm-12 py-3 d-grid gap-2 order-1 order-lg-2">
                        <button class="btn btn-primary">
                          <i class="bi bi-floppy me-2"></i>
                          Simpan
                        </button>
                      </div>

                    </div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
