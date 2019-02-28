<?php include_once('header.php'); ?>
<div class="container">
	<legend>View Warehouse</legend>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">PRODUCT BARCODE : <?php echo $post->Barcode; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">COMMESSE CODE : <?php echo $post->code; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">QUANTITY : <?php echo $post->Qty; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">CREATED DATETIME : <?php echo $post->EntryDateTime; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">ITEM DESCRIPTION : <?php echo $post->Item_desc; ?></label>
    </div>
    
    
    
    <br>
    <br>
     <?php echo anchor('warehouse_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
	
</div>






