<div class="container">  
  <!--eto ung directory na pupuntahan pagka save ng product sa form-->
  <div class="gx-lg-0 gy-3">
  
    <br><h3>Add Product</h3><br>

    <div class="col-md-5">

      <form action="<?= base_url('products/add'); ?>" method="post" enctype="multipart/form-data">

        <!-- the name value is use to store user input and save to databased
              inother word ito ung data handler -->

        <label>Title/Name:</label>
        <input type="text" name="p_title" class="form-control" id="product_title" placeholder="product title" required>
         <small><?php echo form_error('p_title');?></small>  
   
        <label>Description:</label>
        <input type="text" name="p_description" class="form-control" id="product_description" placeholder="product description" required>
        <small><?php echo form_error('p_description');?></small>  

        <label>Price:</label>
        <input type="text" name="p_price" class="form-control" id="product_price" placeholder="product price" required>
        <small><?php echo form_error('p_price');?></small>  

        <label>Stocks:</label>
        <input type="text" name="p_stocks" class="form-control" id="product_stocks" placeholder="product stocks" required> 
        <small><?php echo form_error('p_stocks');?></small>    

        <label>Address/Origin:</label>
        <input type="text" name="p_address" class="form-control" id="name" placeholder="Product Address" required>
        <small><?php echo form_error('p_address');?></small>  
        <br>

        <label>Product Image</label>
        <input type="file" name="p_image" class="form-control" id="name" placeholder="Choose image" required>
        <small><?php echo form_error('p_image');?></small>  
        <br>
            
       
        <h4>Product Category</h4>
        <div class="container">
          
        <div class="col-md-6 form-group">
            <input type="radio" name="p_category" value="CropProduction">
            <label>Crop Production</label>
        </div>

        <div class="col-md-6 form-group">
            <input type="radio" name="p_category" value="Livestock">
            <label>Livestock</label>
        </div>

        <div class="col-md-6 form-group">
          <input type="radio" name="p_category" value="Fertilizer">
          <label>Fertilizer</label>
        </div>

        <div class="col-md-6 form-group">
          <input type="radio" name="p_category" value="Others">
          <label>Others</label>
        </div>
        </div>

      </div><br>
      
      <div class="col-lg-8 ">
        <button type="submit" name="p_save"  style="border:none; font-size: 30px;">Save  </button>
      </div><br>

    </form>
  </div>
 
</div>
    