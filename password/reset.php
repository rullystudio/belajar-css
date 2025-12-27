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
          <form action="<?php echo make_url() ; ?>account/password/set/<?php echo $token ; ?>?email=<?php echo $email ; ?>&&token=<?php echo $token ; ?>" method="post" role="form" class="php-email-form">
              <input type="hidden" name="email" value="<?php echo $email ; ?>">
              <div class="input-group mb-4">
                  <span class="input-group-text"><i class="bi bi-lock"></i></span>
                  <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $password ; ?>">
              </div>
              <span class="form-text" style="margin-bottom: 1px;color: red;"><?php echo form_error('password') ?></span>

              <div class="input-group mb-4">
                  <span class="input-group-text"><i class="bi bi-lock"></i></span>
                  <input type="password" name="retype_password" class="form-control" placeholder="Masukkan Ulang Password" value="<?php echo $retype_password ; ?>">
              </div>
              <span class="form-text" style="margin-bottom: 1px;color: red;"><?php echo form_error('retype_password') ?></span>

              <div class="row">
                <div class="col-12 text-end my-2">

                    <button class="btn btn-primary px-4" >
                      <i class="bi bi-floppy me-2"></i>
                      Simpan
                    </button>
                </div>
                <div class="col-5 text-end">
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
