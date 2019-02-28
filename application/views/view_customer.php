<?php include_once('header.php'); ?>
<div class="container">
<legend>View Brand</legend>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">CUSTOMER NAME : <?php echo $post->CustomerName; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">WEBSITE : <?php echo $post->website; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">DESCRIPTION : <?php echo $post->description; ?></label>
    </div>
        <br>
    <br>
     <?php echo anchor('customer_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>








	









