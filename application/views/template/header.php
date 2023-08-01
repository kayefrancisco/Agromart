    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agromart</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('Impact/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('Impact/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('Impact/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url('Impact/'); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url('Impact/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('Impact/'); ?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url('Impact/'); ?>assets/css/style.css" rel="stylesheet">




  <link rel="stylesheet" href="<?php echo base_url(); ?>https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assetsss/css/message/messagestyle.css">
  <link href="<?php echo base_url(); ?>https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
  <script src="<?php echo base_url(); ?>https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
  <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>



  <link rel="stylesheet" href="<?php echo base_url('style.css'); ?> style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>


  <!-- ===== FOR LEAFLET MAPPING ===== -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

   
      
</head>

<body>
  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">



        <?php if(!$this->session->has_userdata('authenticated')){ ?>
        <i class="bi d-flex align-items-center">
          <a href="<?php echo base_url('register'); ?>">Sign Up</a>
        </i>
        <i class="bi d-flex align-items-center ms-4">
            <a href="<?php echo base_url('login'); ?>"><span>Login</span></a>
        </i>
      <?php } ?>
      </div>

      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="bi">Follow us on</a>
        <a href="register.php" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="register.php" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="register.php" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="register.php" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url('index');?>" class="logo d-flex align-items-center">
        <h1>Agromart<span><img src="<?php echo base_url('Impact/');?>assets/img/Logoo.png" class="img-fluid" alt="" style="height: 200px; width:60px;"></span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo base_url('userpage');?>">Home</a></li>
          <li><a href="<?php echo base_url('About');?>">About</a></li>
          <li><a href="<?php echo base_url('Contacts');?>">Contacts</a></li>

          <li class="dropdown"><a href="#"><span>
            <!--img src="<?php echo base_url('Impact/');?>assets/img/user.png" alt="" style="width:30PX; height: 30px;"-->

            <!--Displaying user names-->
          <?php if($this->session->has_userdata('authenticated')){ ?>
            <span style="justify-content:space-between; margin:10px;"><strong>
            <?= $this->session->userdata('auth_user')['fname']; ?>
            <?= $this->session->userdata('auth_user')['lname']; ?>
            </strong></span>
          <?php } ?>

          </span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
             <!-- <li><a href="#">Profile</a></li> -->

        <!--inalis ko lng ung "!" na sign para ma reverse sa condition ket mag visible ung logout functioon sa interface-->
        <?php if($this->session->has_userdata('authenticated') == TRUE){ ?>
              <li><a href="<?= base_url('logout') ?>">Log out</a></li>
        <?php } ?>
            </ul>
        
          </li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
  

