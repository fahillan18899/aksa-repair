<header class="main-header">
  <?php // $logo = $this->session->userdata('logo'); 
  ?>
  <a href="<?php // echo base_url('dashboard/home') 
            ?>" class="logo"> <!-- Logo -->
    <span class="logo-mini">
      <img class="img-fluid" src="" alt="">
    </span>
    <span class="logo-lg">
      <img class="img-fluid" src="" alt="">
    </span>
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
      <span class="sr-only">Toggle navigation</span>
      <span class="pe-7s-keypad"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- settings -->
        <li class="dropdown dropdown-user">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-settings"></i></a>
          <ul class="dropdown-menu">
            <?php
            //if ($this->permission->method('profile', 'read')->access() || $this->permission->method('profile', 'update')->access()) {
            ?>
            <li><a href=""><i class="pe-7s-users"></i> <?php echo ('profile')
                                                        ?></a></li>
            <?php
            //}
            ?>

            <?php
            //if ($this->permission->method('edit_profile', 'update')->access()) {
            ?>
            <li><a href=""></i> <?php echo ('edit_profile') ?></a></li>
            <?php // } 
            ?>

            <li><a href="logout.php"><i class="pe-7s-key"></i> Logout</a></li>

          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>