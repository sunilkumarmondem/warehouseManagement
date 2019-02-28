<?php include_once('header.php'); ?>
<div class="container">
	<legend>View Brand</legend>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">BRAND NAME : <?php echo $post->BrandName; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">PRODUCT NAME : <?php echo $post->ProductName; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">BARCODE : <?php echo $post->Barcode; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">DESCRIPTION : <?php echo $post->Description; ?></label>
    </div>
    <br>
    <br>
     <?php echo anchor('product_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
	
</div>






