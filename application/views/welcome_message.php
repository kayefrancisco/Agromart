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


</head>

<body>
  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi  d-flex align-items-center">
          <a href="<?php echo base_url('register'); ?>">Sign Up</a>
        </i>
        <i class="bi d-flex align-items-center ms-4">
            <a href="<?php echo base_url('login'); ?>"><span>Login</span></a>
          </i>
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
      <a href="#" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Agromart<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>Agromart</span></h2>
          <p>A web-based system for agricultural market.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="<?php echo base_url('register'); ?>" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="<?php echo base_url('Impact/'); ?>assets/img/Logoo.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->


  <main id="main">

        
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing sections-bg">
      <div class="containers" data-aos="fade-up">
        <div class="section-header">
          <h1>Best Selling Products</h1>
        </div>
        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">
          <!--Top 2-->
          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>RICE</h3> <!--Product Number 2-->
              <div class="space" >
                <div class="pie animate" style="--p:75;--c:#ff8f0f;"> 
                  <h3>75%</h3><!--Percentage inside the pie-->
                </div>
              </div>       
               <div class="text-center">
                <a href="register.php" class="buy-btn">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->


          <!--Top 1-->
           <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
             <div class="space" >
                <div class="pie animate" style="--p:80;--c:#2284e6;">
                  <h5>80%</h5>
                </div>
              </div> 
              <div class="text-center">
                <a href="register.php" class="buy-btn">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <!--Top 3-->
          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>LIVESTOCK: CHECKEN</h3>
              <div class="space">
                <div class="pie animate" style="--p:30;--c:#90EE90;">
                  <h5>30%</h5>
                </div>
              </div>
              <div class="text-center">
                <a href="register.php" class="buy-btn">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->
        </div>
      </div>
    </section><!-- End Pricing Section -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h2>AGROMART: A WEB-BASED SYSTEM FOR AGRICULURAL MARKET </h2>
            <img src="<?php echo base_url('Impact/'); ?>assets/img/Logoo.png" class="img-fluid rounded-4 mb-4" alt="" style="height: 380px; width: 450px;">
            <p>A web-based agromart system is design and to support farmers and reinforce their sales revenue. It creates an interaction between an end-to-end user along with a far distance of location. Enable to open online sharing ideas, as like as real-world open forum.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Data mapping, a component of agromart system that include the use of google maps for real-time display of the geographic information system or GIS structure of the municipality of San Clemente, Tarlac. With the use of data mapping it helps to:
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Forecast most sold products</li>
                <li><i class="bi bi-check-circle-fill"></i> Locate land uses and unuses.</li>
                <li><i class="bi bi-check-circle-fill"></i> Locate business related to agricultures, poultry farms, livestock farming and different variety of rice fields.</li>
              </ul>
              <p>
                Data mapping provide a solution for informative system that inform user for easily calculation of estimated percentile of agricultural products. 
              </p>

              <div class="position-relative mt-4">
                <img src="<?php echo base_url('Impact/'); ?>assets/img/DataMapping.png" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>For any quiries and business related you can reach us through the information dictated. Also you can send message by filling out the form. Thank you so much</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 11AM - 23PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->





  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Agromart</span>
          </a>
          <p>A web-based system for agricultural market.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-5 col-md-12 footer-info">
            <h4>Contact Us</h4>
          </a>
          <div class="social-links d-flex mt-4">
           <p><strong>Address: </strong>Mangatarem, Pangasinan<br><br>
            <strong>Number: </strong>+63 951 0598 340<br><br>
            <strong>Emails: </strong>agromart@gmail.com</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('Impact/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('Impact/'); ?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url('Impact/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url('Impact/'); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url('Impact/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url('Impact/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('Impact/'); ?>assets/vendor/php-email-form/validate.js"></script>


  <script src="<?php echo base_url(); ?>https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/message/main.js"></script>

        
  <!-- Para sa GRAPH -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>
  <script src="<?php echo base_url('Impact/');?>chart.js"></script>
  <script src="<?php echo base_url('Impact/');?>chart1.js"></script>
  <script src="<?php echo base_url('Impact/');?>chart2.js"></script>


  <script src="<?php echo base_url('Impact/');?>assets/js/script.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('Impact/'); ?>assets/js/main.js"></script>


  <!-- ===== Mga folder na galing sa chat box===== -->
  <script src="<?php echo base_url(); ?>javascript/pass-show-hide.js"></script>
  <script src="<?php echo base_url(); ?>javascript/login.js"></script>
  <script src="<?php echo base_url(); ?>javascript/users.js"></script>
  <script src="<?php echo base_url(); ?>javascript/signup.js"></script>
  
</body>
<style type="text/css">
  /*    CSS code for the best selling selling feauture   */

 @property --p{
  syntax: '<number>';
  inherits: true;
  initial-value: 1;
}
.pie {
  --p:20;
  --b:22px;
  --c:darkred;
  --w:150px;

  width: var(--w);
  aspect-ratio: 1;
  position: relative;
  display: inline-grid;
  margin: 5px;
  place-content: center;
  font-size: 25px;
  font-weight: bold;
  font-family: sans-serif;
}
.pie:before,
.pie:after {
  content: "";
  position: absolute;
  border-radius: 50%;
}
.space{
  width: 75%;
  margin: auto;
  display: flex;
  justify-content: center;

}
.pie:before {
  inset: 0;
  background:
    radial-gradient(farthest-side,var(--c) 90%,#0000) top/var(--b) var(--b) no-repeat,
    conic-gradient(var(--c) calc(var(--p)*1%),#0000 0);
  -webkit-mask: radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
          mask: radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
}
.pie:after {
  inset: calc(50% - var(--b)/2);
  background: var(--c);
  transform: rotate(calc(var(--p)*3.6deg)) translateY(calc(50% - var(--w)/2));
}
.animate {
  animation: p 1s .5s both;
}
@keyframes p{
  from{--p:0}
}

/* For kwan sa Grap */

</style>
</html>