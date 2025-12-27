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
                  
                  <table style="width: 100%;">
                    <tr>
                      <td style="width: 10%;padding: 8px 0px 8px 0px;">
                        Nama
                      </td>
                      <td style="width: 3px; text-align: center;padding: 8px 0px 8px 8px;">
                        :
                      </td>
                      <td style="padding: 8px 0px 8px 8px;">
                        <?php echo $nama_depan ; ?> <?php echo $nama_belakang ; ?> 
                      </td>
                    </tr>

                    <tr>
                      <td style="padding: 8px 0px 8px 0px;">
                        Email
                      </td>
                      <td style="text-align: center;padding: 8px 0px 8px 8px;">
                        :
                      </td>
                      <td style="padding: 8px 0px 8px 8px;">
                        <?php echo $email ; ?>
                      </td>
                    </tr>

                    <tr>
                      <td style="padding: 8px 0px 8px 0px;">
                        Telepon
                      </td>
                      <td style="text-align: center;padding: 8px 0px 8px 8px;">
                        :
                      </td>
                      <td style="padding: 8px 0px 8px 8px;">
                        <?php echo $telepon_user ; ?>
                      </td>
                    </tr>
                    
                  </table>
                  
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
