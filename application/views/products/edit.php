<div class="container">  
  <!--eto ung directory na pupuntahan pagka save ng product sa form-->
  <div class="gx-lg-0 gy-3" style="display: flex; justify-content:center;">

    <div class="col-md-5" style="width: 500px;">
    <br><h3><strong>Edit Product</strong></h3><br>

      <form action="<?= base_url('products/update/'.$product->id ); ?>" method="post" enctype="multipart/form-data">

        <!-- fetch the previous value of data using the value parameters -->
        <label>Title/Name:</label>
        <input type="text" name="p_title" value="<?= $product->p_title; ?>" class="form-control" id="product_title" placeholder="product title" required>
        <small><?php echo form_error('p_title');?></small>  
        <!-- use small to alert user from errors -->
   
        <label>Description:</label>
        <!-- fetch the previous value of data using the value parameters -->
        <input type="text" name="p_description" value="<?= $product->p_description; ?>" class="form-control" id="product_description" placeholder="product description" required>
        <small><?php echo form_error('p_description');?></small>  
        <!-- use small to alert user from errors -->

        <label>Price:</label>
        <!-- fetch the previous value of data using the value parameters -->
        <input type="text" name="p_price" value="<?= $product->p_price; ?>" class="form-control" id="product_price" placeholder="product price" required>
        <small><?php echo form_error('p_price');?></small>  
        <!-- use small to alert user from errors -->

        <label>Stocks:</label>
        <!-- fetch the previous value of data using the value parameters -->
        <input type="text" name="p_stocks" value="<?= $product->p_stocks; ?>" class="form-control" id="product_stocks" placeholder="product stocks" required> 
        <small><?php echo form_error('p_stocks');?></small>  
        <!-- use small to alert user from errors -->  

        <label>Address/Origin:</label>
        <!-- fetch the previous value of data using the value parameters -->
        <input type="text" name="p_address" value="<?= $product->p_address; ?>" class="form-control" id="name" placeholder="Product Address" required>
        <small><?php echo form_error('p_address');?></small>  
        <!-- use small to alert user from errors -->
        <br>

        <label>Product Image</label>
        <!-- fetch the previous value of data using the value parameters -->
        <input type="hidden" name="old_p_image" value="<?= $product->p_image; ?>">
        <input type="file" name="p_image" class="form-control" id="name" placeholder="Choose image">
        <small><?php echo form_error('p_image');?></small>  
        <br>
            
       
        <h4>Product Category</h4>

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

        <div class="col-lg-8 ">
          <button type="submit" name="p_update"  style="border:none; font-size: 20px;background: #008374; border-radius: 0px 15px 0px 15px; padding: 8px;width: 150px;">Update</button>
        
        </div><br> 
      </form>
    </div>
    <div class="col-md-5" style="width: 500px; margin-left:50px;">
      <img src="<?= base_url('images/'. $product->p_image) ?>" class="" alt="images" style="width: 500px; height:650px; padding:10%;">
    </div>
  </div>
 
</div>
    