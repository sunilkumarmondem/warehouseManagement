<?php include_once('header.php'); ?>
<div class="container">
  <fieldset>
    <legend>View Brand</legend>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">BrandName : <?php echo $post->BrandName; ?></label>
    </div>
    <br>
    <br>
     <?php echo anchor('welcome/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
  </div>
 