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
      <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-12">
          <form method="post" action="<?php echo base_url() ; ?>account/password/request">
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi bi-envelope"></i></span>
              <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
            </div>
            <span style="color: red"><?php echo form_error('email') ?></span>


            <div class="row">

              <div class="col-lg-5 col-sm-12 py-3 ms-auto">
                <button class="btn btn-primary">
                  <i class="bi bi-key me-2"></i>
                  Request Password
                </button>
              </div>

            </div>
          </form>
        </div>
      </div>
      
    </div>
  </section>

</main>

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
