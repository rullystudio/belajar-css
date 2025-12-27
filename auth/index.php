<!DOCTYPE html>
<html lang="en">
<?php 
    $this->load->view('template/head') ;
?>

<body>

  <!-- navigation -->
<div class="border-bottom shadow-sm">
  <nav class="navbar navbar-light py-2">
    <div class="container justify-content-center justify-content-lg-between">
      <a class="navbar-brand" href="<?php echo base_url() ; ?>">
        <img src="<?php echo base_url() ; ?>assets/images/lesehan-pw.png" alt="" class="d-inline-block align-text-top" style="width: 180px;">
      </a>
      <span class="navbar-text">
        Belum Punya Akun ? <a href="<?php echo base_url() ; ?>account/register">Register</a>
      </span>
    </div>
  </nav>
</div>

 
  <main>
  <!-- section -->
  <section class="my-lg-14 my-8">
    <div class="container">
      <!-- row -->
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2 d-none d-lg-block">
          <!-- img -->
          <img src="../assets/images/svg-graphics/signin-g.svg" alt="" class="img-fluid">
        </div>
        <!-- col -->
        <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
          <div class="mb-lg-9 mb-3">
            <h1 class="mb-1 h4 fw-bold">Selamat Datang di Lesehan PW</h1>
            <p>Silahkan Login untuk memulai belanja.</p>
          </div>
          <div class="mb-lg-9 mb-3">
            
            <?php if ($this->session->flashdata('pesan')): ?>
                    <?php echo $this->session->flashdata('pesan'); ?>
            <?php endif; ?>
          </div>

          <form id="form-login">
            <div class="row g-3">
              <!-- row -->

              <div class="col-12">
                <!-- input -->
                <input type="text" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="col-12">
                <!-- input -->
                <div class="password-field position-relative">
                  <input type="password" id="fakePassword" name="password" placeholder="Enter Password" class="form-control">
                  <span><i id="passwordToggler" class="bi bi-eye-slash"></i></span>
                </div>

              </div>
              <div class="d-flex justify-content-between">
                <!-- form check -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <!-- label --> <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                  </label>
                </div>
                <div> Lupa Password ? <a href="<?php echo base_url() ; ?>account/password">Reset</a></div>
              </div>
              <!-- btn -->
              <div class="col-12 d-grid"> <button type="submit" class="btn btn-primary">Login</button>
              </div>
              <!-- link -->
              <div>Belum punya akun ? <a href="<?php echo base_url() ; ?>account/register"> Register</a></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

</main>



 <!-- color scheme -->
 <div id="success_toast" class="toast position-absolute top-0 end-0 mt-2 me-3 align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true" style="border-radius: 5px;">
   <div class="d-flex">
     <div class="toast-body">
       <i class="bi bi-check2"></i> Login berhasil 
     </div>
     <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
   </div>
 </div>

 <!-- color scheme -->
 <div id="failed_toast" class="toast position-absolute top-0 end-0 mt-2 me-3 align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true" style="border-radius: 5px;">
   <div class="d-flex">
     <div class="toast-body">
       <i class="bi bi-exclamation-triangle me-2 mt-0 mb-0" style="font-size: 16px;"></i> Login Gagal 
     </div>
     <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
   </div>
 </div>



<div class="col-11 col-lg-3 position-absolute top-0 end-0 mt-5 me-3">
    <div id="progress" class="progress" style="display: none;">
      <div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
    </div>
</div>

  <!-- Footer -->
  <!-- footer -->
<?php 
  $this->load->view('template/footer')
?>
  <!-- Javascript-->
  <!-- Libs JS -->
<?php 
    $this->load->view('template/js') ;
?>

<?php 
    $this->load->view('content/account/auth/script') ;
?>


</body>

</html>
