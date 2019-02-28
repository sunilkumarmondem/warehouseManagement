<?php include_once('header.php'); ?>
<div class="container">
	<legend>View Plant</legend>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">CUSTOMER NAME : <?php echo $post->CustomerName; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">COUNTRY NAME : <?php echo $post->name_en; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">PLANT NAME : <?php echo $post->PlantName; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">LEGAL NAME : <?php echo $post->legal_name; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">ADDRESS : <?php echo $post->address; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">LEGAL ADDRESS : <?php echo $post->legal_address; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">NAS PATH : <?php echo $post->nas_path; ?></label>
    </div>
    <br>
    <br>
     <?php echo anchor('plant_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
	
</div>






