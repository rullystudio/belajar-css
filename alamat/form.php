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
          <div class="row justify-content-center">
              <div class="col-lg-11 mt-10">
                
                <?php if ($this->session->flashdata('pesan')): ?>                        
                  <div class="col-lg-12 py-2">
                    <?php echo $this->session->flashdata('pesan'); ?>
                  </div>
                <?php endif; ?>
                <!-- form -->
                <form method="post" action="<?php echo $action ; ?>">
                  <input type="hidden" name="id_alamat" value="<?php echo $id_alamat ; ?>">
                  <!-- input -->
                  <div class="mb-3">
                    <label class="form-label">Nama Alamat</label>
                    <input type="text" class="form-control" name="nama_alamat" value="<?php echo $nama_alamat ; ?>" >
                    <span style="color: red"><?php echo form_error('nama_alamat') ?></span>
                  </div>
                  <!-- input -->
                  <div class="mb-5">
                    <label class="form-label">Provinsi</label>
                    <div class="col-lg-12">
                      
                    <select id="provinsi" name="id_provinsi" class="form-control">
                        <option value="">Pilih Provinsi</option>
                        <?php 
                            foreach($provinsi as $p) {
                        ?>
                        <option value="<?php echo $p->province_id; ?>" <?php if($p->province_id == $id_provinsi) { echo "selected" ; } ?> ><?php echo $p->province_name; ?></option>
                        <?php } ?>
                    </select>
                    </div>
                    <span style="color: red"><?php echo form_error('id_provinsi') ?></span>
                  </div>
                  <!-- input -->
                  <div class="mb-5">
                    <label class="form-label">Kabupaten</label>
                    
                    <select id="kabupaten" name="id_kabupaten" class="form-control">
                        <?php if($id_kabupaten) { ?>
                        <option value="<?php echo $id_kabupaten ; ?>"><?php echo $nama_kabupaten ; ?></option>
                        <?php } else { ?>
                        <option value="">Pilih Kabupaten</option>
                        <?php } ?>
                    </select>
                    <span style="color: red"><?php echo form_error('id_kabupaten') ?></span>
                  </div>
                  <!-- input -->
                  <div class="mb-5">
                    <label class="form-label">Kecamatan</label>
                    
                    <select id="kecamatan" name="id_kecamatan" class="form-control">
                        <?php if($id_kecamatan) { ?>
                        <option value="<?php echo $id_kecamatan ; ?>"><?php echo $nama_kecamatan ; ?></option>
                        <?php } else { ?>
                        <option value="">Pilih Kecamatan</option>
                        <?php } ?>
                    </select>
                    <span style="color: red"><?php echo form_error('id_kecamatan') ?></span>
                  </div>
                  <!-- input -->
                  <div class="mb-5">
                    <label class="form-label">Kode Pos</label>
                    
                    <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?php echo $kode_pos ; ?>" >
                    <span style="color: red"><?php echo form_error('kode_pos') ?></span>
                  </div>
                  <!-- input -->
                  <div class="mb-3">
                    <label class="form-label">Telepon</label>
                    <input type="text" class="form-control" name="telepon" value="<?php echo $telepon ; ?>" >
                    <span style="color: red"><?php echo form_error('telepon') ?></span>
                  </div>
                  <!-- input -->
                  <div class="mb-5">
                    <label class="form-label">Detail Alamat</label>
                    
                    <textarea rows="4" id="detail_alamat" name="detail_alamat" value="<?php echo $detail_alamat ; ?>" class="form-control"><?php echo $detail_alamat ; ?></textarea>
                    <span style="color: red"><?php echo form_error('detail_alamat') ?></span>
                  </div>
                  <!-- input -->
                  <div class="mb-5">
                      <label class="form-label">Cari Lokasi</label>
                      
                        <div class="mb-5" id="geocoder" ></div>
 <!-- Elemen untuk Geocoder -->
                      <input type="hidden" id="latitude" name="latitude" placeholder="Latitude">
                      <input type="hidden" id="longitude" name="longitude" placeholder="Longitude">
                      <div id="map"></div>
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
  </section>
</main>
