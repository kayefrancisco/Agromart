<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Seller-Home</title>
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
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="register.html" class="logo d-flex align-items-center">
        <h1>Agromart<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="Data_Mapping.php">Data Mapping</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="#contact">Contacts</a></li>
          <li class="dropdown"><a href="#"><span><img src="../Agromart/assets/img/user.png" alt="" style="width:30PX; height: 30px;"></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Profile</a></li>
              <li><a href="logout.php">Log out</a></li>
            </ul>
          </li>
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
          <h2>Hi <span><?php echo $_SESSION['admin_name'] ?></span></h2>
          <h2>Welcome to <span>Agromart</span></h2>
          <p>A web-based system for agricultural market.</p>
        </div>
         <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->
  <main id="main">




<!--Charting of possible product trends-->
   <section class="sample-page">
    <div class="section-header">
      <h1>Possible Product Trends</h1>
    </div>
    <div class="chart">

      
    <!-- partial:index.partial.html -->
    <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-base.min.js"></script>

    <div id="container"></div>
    <!-- partial -->
    <script src="assets/js/script.js"></script>

    </div>
  </section>
     
    
    

   <!-- ======= Best Selling Products ======= -->
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
                <a href="#" class="buy-btn">Buy Now</a>
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
                <a href="#" class="buy-btn">Buy Now</a>
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
                <a href="#" class="buy-btn">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->
        </div>
      </div>
    </section><!-- End Pricing Section -->





    <section class="sample-page"  class="pricing sections-bg">
      <div class="container" data-aos="fade-up">
       <div class="section-header">
          <h1>My Products</h1>
        </div>
        <div class="tbl">
          <table>
            <thead>
              <th>Product Title</th>
              <th>Product Description</th>
              <th>Product Address</th>
              <th>Product Categpry</th>
              <th>Availiable Stocks</th>
              <th>Edit</th>
              <th>Delete</th>
            </thead>
            <tbody>
              <td>corn</td>
              <td>sweet sya</td>
              <td>Bamban San Clemente Tarlac</td>
              <td>Crop Products</td>
              <td>200 piraso</td>
              <td><a href="#">edit</a></td>
              <td><button type="Delete">delete</button></td>
            </tbody>
          </table>
        </div>
      </div>
    </section>




    <seection>
      <div class="container"> 
        <h4>Add Products:</h4>
        <div class="gx-lg-0 gy-3">
        <br>
        <div class="col-md-6 form-group">
          <label>Input Product Name/Brand:</label>
          <input type="text" name="product_title" class="form-control" id="product_title" placeholder="product_title" >
        </div>
        <br>

        <div class="col-md-6 form-group">
          <label>Input Product description:</label>
          <input type="text" name="product_description" class="form-control" id="product_description" placeholder="product_description" >
        </div>
        <br>
      
        <div class="col-md-6 form-group">
          <label>Input Product Address:</label>
          <input type="text" name="product_address" class="form-control" id="name" placeholder="Product Address" >
        </div>
        <br>

        <div class="col-lg-4 form-group">
          <h6>Product Category</h6>
          <div class="col-md-6 form-group">
            <input type="radio" name="product_category" value="Crop_Production">
            <label>Crop Production</label>
          </div>
          <div class="col-md-6 form-group">
            <input type="radio" name="product_category" value="Livestock">
            <label>Livestock</label>
          </div>
          <div class="col-md-6 form-group">
            <input type="radio" name="product_category" value="Fertilizer">
            <label>Fertilizer</label>
          </div>
          </div>
          <br>
          <div class="col-md-5 form-group">
            <label>Input stocks:</label>
            <input type="text" name="product_quantity" class="form-control" id="product_quantity" placeholder="" >
        </div>
        <br>
        <div class="col-lg-8">
          <button type="submit" style="border:none; font-size: 30px;">Save Product</button>
        </div>
        <br>
      </div>
    </div>
  </seection>

    

     
      



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>AGROMART:</span>
          </a>
          <p> A WEB-BASED SYSTEM FOR AGRICULURAL MARKET</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>


        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>
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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>
</html>