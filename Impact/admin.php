<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>[Template] Sample Inner Page</title>
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


  <!-- =======================================================
  * Template Name: Impact - v1.2.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style type="text/css">
  .body{
padding: 0%;
margin: 0%;
color: black;
/*
#f6f6f6
#008374;
#00b6a1;
*/ 
background:#008374; ;

}
.sidebar {
float: left;
border: 1px solid black;
background:#00b6a1;
width: 0;
font-size: 20px;
height: 100%;
position: fixed; 
z-index: 1; 
top: 0;
left: 0;
overflow-x: hidden;
padding-top: 0;
transition: 0.5s;
}

/* Style the buttons that are used to open the tab content */
.sidebar button {
display: block;
color: black;
padding: 16px;
width: 100%;
border: none;
outline: none;
text-align: left;
cursor: pointer;
text-decoration: none;
font-size: 25px;
transition: 0.3s;
background: transparent;
position: relative;
border: 1px solid black;
list-style: none;
}

/* Change background color of buttons on hover */
.sidebar button:hover {
background-color: red;
color: black;
}

/* Create an active/current "tab button" class */
.sidebar button.active {
background-color: red;
}

.openbtn {
font-size: 30px;
cursor: pointer;
background: transparent;
padding: 15px 20px;
border: none;
position: absolute;
}

.closebtn {
color:  transparent;
background:  transparent;
align-items: center;
font-weight: 200;
font-size: 24px;
text-decoration: none;
margin-left: 30px;
margin-bottom: 5px;
position: absolute;
}

/* Style the tab content */
.tabcontent {
border: 1px solid black;
width: 100%;
height: 100%;
display: none;


}






</style>


<body class="body">
  <div id="mySidebar" class="sidebar">
      <h3>ADMINISTRATOR</h3>
      <button class="tablinks" onclick="openLoanManagement(event, 'Home')">Home</button>

      <button class="tablinks" onclick="openLoanManagement(event, 'Accounts')">Accounts</button>

      <button class="tablinks" onclick="openLoanManagement(event, 'Products')">Products</button>

      <button class="tablinks" onclick="openLoanManagement(event, 'Features')">Features</button> 

      <button class="tablinks" onclick="openLoanManagement(event, 'Data Mapping')">Data Mapping</button> 
  </div>
      
    

  <div id="main" class="main">
    <button class="openbtn" onclick="openNav()">&#9776;</button>
    <div class="text-center">
      <h2>AGROMART</h2>
      <p>A web-based system for agricultural market.</p>
    </div>


      <!--Home page-->
    <div id="Home" class="tabcontent">
          <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing sections-bg" style="background: #008374;">
      <div class="containers" data-aos="fade-up" style="color: black;">
                <div class="section-header">
          <h1>Best Selling Products</h1>
        </div>s
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
            </div>
          </div><!-- End Pricing Item -->
        </div>
      </div>
    </section><!-- End Pricing Section -->


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

     


    </div>

          <!--Full Name Example-->
      <div id="Accounts" class="tabcontent">
        <div class="tbl">
          <table>
            <thead>
              <th>Delete</th>
              <th>Name</th>
              <th>Address</th>
              <th>Email</th>
              <th>Password</th>
              <th>user_type</th>
              <th>date_added</th>
            </thead>
            <tbody>
               <td><button type="Delete">delete</button></td>
              <td>corn</td>
              <td>sweet sya</td>
              <td>Bamban San Clemente Tarlac</td>
              <td>Crop Products</td>
              <td>200 piraso</td>
              <td><a href="#">edit</a></td>
            </tbody>
          </table>
        </div>
      </div>

     
 


                  <!--Full Name Example-->
            <div id="Products" class="tabcontent">
            <h2>Products</h2>
            <p>Products</p>
          </div>

                            <!--Full Name Example-->
            <div id="Features" class="tabcontent">
            <h2>Features</h2>
            <p>Features</p>
          </div>


      </div>


    
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

<script>
  /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
  var clickCount = 0;
  function openNav() {
  var i = event.buttons;
    if(clickCount == 0) {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    clickCount = 1;
    } else if(clickCount == 1) {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    clickCount = 0;
    }
  }


  function openLoanManagement(evt, Open) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(Open).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</body>
<style type="text/css">
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
.tbl{
  width: 100%;
  display: inline-flex;
  justify-content: center;

}

.tbl{
  width: 100%;
  display: inline-flex;
  justify-content: center;

}
table, th, td {
  border:1px solid black;
  height: 10PX;
  padding: 12px;
}
</style>
</html>



