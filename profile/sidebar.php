<?php 
  $uri = $this->uri->segment('3') ;
  $uri_2 = $this->uri->segment('2') ;
?>
<div class="col-lg-3 col-md-4 col-12 border-end  d-none d-md-block">
  <div class="pt-10 pe-lg-10">
    <!-- nav item -->
    <ul class="nav flex-column nav-pills nav-pills-dark">
      <li class="nav-item">
        <a class="nav-link <?php if($uri_2 == 'profile' && $uri == '' ) { ?> active <?php } ?>" aria-current="page" href="<?php echo base_url() ; ?>account/profile"><i class="feather-icon icon-shopping-bag me-2"></i>Informasi Akun</a>
      </li>
      <!-- nav item -->
      <li class="nav-item">
        <a class="nav-link <?php if($uri == 'setting') { ?> active <?php } ?>" href="<?php echo base_url() ; ?>account/profile/setting"><i class="feather-icon icon-settings me-2"></i>Setting</a>
      </li>
      <!-- nav item -->
      <li class="nav-item">
        <a class="nav-link <?php if($uri_2 == 'alamat') { ?> active <?php } ?>" href="<?php echo base_url() ; ?>account/alamat"><i class="feather-icon icon-map-pin me-2"></i>Alamat</a>
      </li>
      <!-- nav item -->
      <li class="nav-item">
        <a class="nav-link <?php if($uri == 'ubah_password') { ?> active <?php } ?>" href="<?php echo base_url() ; ?>account/profile/ubah_password"><i class="feather-icon icon-lock me-2"></i>Ubah Password</a>
      </li>
      <!-- nav item -->
      <li class="nav-item">
        <a class="nav-link <?php if($uri_2 == 'wishlist') { ?> active <?php } ?>" href="<?php echo base_url() ; ?>account/wishlist"><i class="feather-icon icon-heart me-2"></i>Wishlist</a>
      </li>
      <!-- nav item -->
      <li class="nav-item">
        <hr>
      </li>
      <!-- nav item -->
      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url() ; ?>account/logout"><i class="feather-icon icon-log-out me-2"></i>Log out</a>
      </li>
    </ul>
  </div>
</div>
<!-- 

<ul class="list-group">

    <a href="<?php echo make_url() ; ?>account/profile" class="list-group-item list-group-item-action text-sidebar  <?php if($uri == '') { ?> active-sidebar <?php } ?> " >
        <i class="fa fa-user"></i>
        Informasi Akun
    </a>

    <a href="<?php echo base_url() ; ?>account/profile/setting" class="list-group-item list-group-item-action text-sidebar <?php if($uri == 'setting') { ?> active-sidebar <?php } ?>">
        <i class="fa fa-cog mr-2"></i>
        Setting
    </a>

    <a href="<?php echo base_url() ; ?>account/profile/ubah_password" class="list-group-item list-group-item-action text-sidebar <?php if($uri == 'ubah_password') { ?> active-sidebar <?php } ?>">
        <i class="fa fa-lock mr-2"></i>
        Ubah Password
    </a>
</ul> -->


  <!-- modal -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAccount" aria-labelledby="offcanvasAccountLabel">
    <!-- offcanvas header -->
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasAccountLabel">Account Setting</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- offcanvas body -->
    <div class="offcanvas-body">
      <ul class="nav flex-column nav-pills nav-pills-dark">
        <!-- nav item -->
        <li class="nav-item">
          <a class="nav-link <?php if($uri == '') { ?> active <?php } ?> " aria-current="page" href="<?php echo base_url() ; ?>account/profile"><i class="feather-icon icon-shopping-bag me-2"></i>Informasi Akun</a>
        </li>
        <!-- nav item -->

        <li class="nav-item">
          <a class="nav-link <?php if($uri == 'setting') { ?> active <?php } ?>" href="<?php echo base_url() ; ?>account/profile"><i class="feather-icon icon-settings me-2"></i>Settings</a>
        </li>
        <!-- nav item -->

        <li class="nav-item">
          <a class="nav-link" href="account-address.html"><i class="feather-icon icon-map-pin me-2"></i>Address</a>
        </li>
        <!-- nav item -->

        <li class="nav-item">
          <a class="nav-link" href="account-payment-method.html"><i class="feather-icon icon-credit-card me-2"></i>Payment Method</a>
        </li>
        <!-- nav item -->

        <li class="nav-item">
          <a class="nav-link" href="account-notification.html"><i class="feather-icon icon-bell me-2"></i>Notification</a>
        </li>
      </ul>
      <hr class="my-6">
      <div>
        <!-- navs -->
        <ul class="nav flex-column nav-pills nav-pills-dark">
          <!-- nav item -->
          <li class="nav-item">
            <a class="nav-link " href="../index.html"><i class="feather-icon icon-log-out me-2"></i>Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </div>