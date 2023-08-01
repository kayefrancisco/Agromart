<!--<?php if($this->session->flashdata('status')): ?>
   <div class="form-btn" style="justify-content: center; height: 35px; display: flex; color: crimson; padding: 1%; font-weight: 500;">
       <?= $this->session->flashdata('status'); ?>
   </div>
<?php endif; ?>
-->
  <!-- End Header -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class=" order-2 order-lg-1 d-flex flex-column justify-content-center text-center ">
          <h2>Hi.. <br><span>
            <?= $this->session->userdata('auth_user')['fname']; ?><span></span>
            <?= $this->session->userdata('auth_user')['lname']; ?></span></h2>
          <h2>Welcome to Agromart</h2>
          <p>A web-based system for agricultural market.</p>
          <div class=" justify-content-center justify-content-lg-start">
            <a href="<?php echo base_url('Product');?>" class="btn-get-started" style="margin: 2%;">
              START SHOPPING
            </a>
            <a href="<?php echo base_url('products/add');?>" class="btn-get-started" style="margin: 2%;">
              ADD PRODUCTS
            </a>
            <a href="<?php echo base_url('products');?>" class="btn-get-started" style="margin: 2%;">
              MY PRODUCTS
            </a>
          </div>
        </div>
        <div class="order-lg-2"></div>
      </div>
   </div> 
</style>
</section>

<main id="main">

<style>
  .myForm {
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.8em;
width: 20em;
padding: 1em;
border: 1px solid #ccc;
}

.myForm * {
box-sizing: border-box;
}

.myForm fieldset {
border: none;
padding: 0;
}

.myForm legend,
.myForm label {
padding: 0;
font-weight: bold;
}

.myForm label.choice {
font-size: 0.9em;
font-weight: normal;
}

.myForm input[type="text"],
.myForm input[type="tel"],
.myForm input[type="email"],
.myForm input[type="datetime-local"],
.myForm select,
.myForm textarea {
display: block;
width: 100%;
border: 1px solid #ccc;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.9em;
padding: 0.3em;
}

.myForm textarea {
height: 100px;
}

.myForm button {
padding: 1em;
border-radius: 0.5em;
background: #eee;
border: none;
font-weight: bold;
margin-top: 1em;
}

.myForm button:hover {
background: #ccc;
cursor: pointer;
}
		.leaflet-container{
        height: 500px;
        width: 750px;
        max-width: 100%;
        max-height: 100%;
      }
    .AddMarker{
			height: 500px;
			width: 400px;
			max-width: 100%;
			max-height: 100%;
		}
    .legend{
			height: auto;
			width: 130px;
      margin: 10px;
      padding: 0;
		}
    ul li{
      text-decoration: none;
      list-style: none;
      margin: 0;
      padding: 0;
    }
    ul li img{
      width: 100%;
      height: 30px;
    }
	</style>

    <!--DATA MAPPING-->
    <section style="display: flex; justify-content:center;">

      <div style="display: flex; justify-content:center; border: 1px solid black;">
              <div id="map"></div>
              
        <div class="legend">
          <h4 style="margin-top:10px;display: flex; justify-content:center;"><strong>Legend</strong></h4>
          <div class="order" style="display:flex; justify-content:center;">
            <ul>
              <li>Rice <br><img src="<?php echo base_url('Impact/');?>icons/rice.png" alt=""></li><br>
              <li>Corn <br><img src="<?php echo base_url('Impact/');?>icons/corn.png" alt=""></li><br>
              <li>Fish Pond <br><img src="<?php echo base_url('Impact/');?>icons/fishpond.png" alt=""></li><br>
              <li>Poultry Farms <br><img src="<?php echo base_url('Impact/');?>icons/poultryfarm.png" alt=""></li><br>
              <li>Monggo <br><img src="<?php echo base_url('Impact/');?>icons/manggo.png" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="AddMarker container col-md-5">
    
        <fieldset id="fback">
        <legend> <b>Input details </b></legend>
        
<form class="myForm" method="post" action="<?= base_url() ?>PageController/userpage" >

<p>
<label>Name of crops:
 <div>
 <select name="crops" id="mySelect" onchange="myFunction()">
                     
   <?php foreach ($data as $data) {  ?>

  
  <option value="<?php echo $data['id']; ?>"><?php echo $data['Crops']; ?> </option>

    <?php    }  ?>
         
        </select>
  
      </div>
</label> 
</p>

<p>
<label>type of crops: 
 <input type="text" name="types" id="types">
</label>
</p>

<p>
<label for="pdate">Planted Date: </label>
  <input type="date" name="plant_date" id="pdate" required>
</p>

<p>
<label for="edate">Estimated date of harvest: </label>
  <input type="date" name="harvest_date" id="edate" required>
</p>
<p>
<label for="lat">lat </label>
      <input type="text" name="lat" id ="lat" required>
</p>
<p>
<label for="lng">lng </label>
      <input type="text" name="lng" id ="lng"required>
</p>
 <input type="submit" name="save" value="Save Data"/>

</form>
  </fieldset>

      </div>
     
    </section>

<style>
  #container {
    width: 100%;
    height: 350px;
    margin: 50px;
    padding: 0;
    border: 1px solid #008374;
  }
  .chart{
    display: inline-flex;
    justify-content: center;
    width: 100%;
    height: 400px;
  }
</style>

<!-- ===== Charting of possible product trends ===== -->
   <section id="chart" class="pricing sections-bg">
      <div class="section-header">
         <h3>Statistical Data Projection</h3>
      </div>

    <div class="containerS">
      <div class="chartS">
        <H6>2021</H6> 
        <canvas id="barChart" width="300" height="300"></canvas>
      </div>

      <div class="chartS">
        <h6>2022</H6> 
        <canvas id="barChart1" width="300" height="300"></canvas>
      </div>

      <div class="chartS">
        <H6>2023</H6>
        <canvas id="barChart2" width="300" height="300"></canvas>
      </div>
    </div>

      <!-- ===== WHOLE REPRESENTATION NA ITO ===== -->
    <div class="chart" >
        <!-- partial:index.partial.html -->
      <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-base.min.js"></script>

      <div id="container"></div>
        <!-- partial -->
    </div>
  </section>
  
  <style>
    #containerS{
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .containerS{
      display: flex;
      align-items: center;
      justify-content: center;
      gap:20px;   
    }
    .chartS{
      height: 350px;
      width: 400px;
      padding: 1.5rem;
      border: 1px solid #008374;
      border-radius: 1rem;
      background: ##092918;
      box-shadow: 0 0 16 rgba(0, 0, 0, 8);
    }
  </style>

</main>
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

</style>